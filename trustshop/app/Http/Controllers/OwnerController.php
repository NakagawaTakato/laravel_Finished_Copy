<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ShopRequest;
use App\Models\Shop;
use App\Models\Merchandise;
use App\Models\Name;
use App\Models\Transformation;
use App\Models\Add;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MerchandiseRequest;
use Illuminate\Support\Facades\Log;

class OwnerController extends Controller
{
    public function profile(Request $request)
    {
        $user = auth()->user();
        
        return view('profile', compact('user'));    
    }

    public function profile_thanks(Request $request)
    {
        $user = auth()->user();
        
        $request->validate([
            'role' => 'required|in:user,owner',
        ]);

        $user->update([
            'role' => $request->role
        ]);

        return view('profile_thanks');
    }

    public function shop_edit(Request $request)
    {
        $shops = Shop::where('user_id', auth()->id())->get();
        $merchandises = Merchandise::first();

        $transformations = Transformation::first();
    
        // 配列でラップせずにそのまま渡す
        return view('shop_edit', ['shops' => $shops, 'merchandises' => $merchandises, 'transformations' => $transformations]);
    }

    public function ShopName_registration(Request $request)
    {
        return view('ShopName_registration');
    }

    public function ShopName_edit(Request $request)
    {
        $shopId = $request->input('shop_id');
        
        // セッションにshopがある場合はそれを使用
        if (session()->has('shop')) {
            $shop = session('shop');
            session()->forget('shop'); // 使用後はセッションから削除
        } else {
            $shop = Shop::find($shopId);
        }

        return view('ShopName_edit', ['shop' => $shop]);
    }

    public function ShopName_registration_thanks(ShopRequest $request)
    {
        $shop = [
            'user_id' => auth()->id(),
            'name' => $request->input('name'),
            'image' => 'img/shopFolder/default.png',
            'detail' => $request->input('detail'),
            'is_display' => false
        ];
        Shop::create($shop);

        return view('ShopName_registration_thanks');
    }
    
    public function ShopName_edit_thanks(Request $request)
    {
        $shopId = $request->input('shop_id');
        $shop = Shop::find($shopId);
        
        // ShopRequestのバリデーションルールを取得
        $shopRequest = new ShopRequest();
        $validator = \Validator::make($request->all(), $shopRequest->rules(), $shopRequest->messages());
        
        // バリデーションエラーがある場合は元のビューに戻る
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('shop', $shop); // $shop変数をセッションに追加
        }

        try {
            $oldName = $shop->name;

            $shop->update([
                'name' => $request->name,
                'image' => 'img/shopFolder/default.png',
                'detail' => $request->detail,
                'is_display' => false,
            ]);

            $newName = $request->input('name');

            // Merchandiseテーブルの更新（同じshop名を持つすべてのレコード）
            Merchandise::where('judge', $oldName)->update(['judge' => $newName]);
        
            // Transformationテーブルの更新（同じshop名を持つすべてのレコード）
            Transformation::where('name', $oldName)->update(['name' => $newName]);

            return view('ShopName_edit_thanks');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => '更新中にエラーが発生しました。']);
        }
    }

    public function destroy(Request $request)
    {
        Shop::find($request->id)->delete();
        return redirect('/shop_edit')->with('message', 'Shopを削除しました');
    }

    public function favorite_merchandise(Request $request)
    {
        $transformations = Transformation::all();

        return view('favorite_merchandise', ['transformations' => $transformations]);
    }

    public function exportCsv(Request $request)
    {
        // 選択されたアイテムのIDを取得
        $selectedItems = $request->input('selected_items', []);
        
        // 選択されたアイテムがない場合はリダイレクト
        if (empty($selectedItems)) {
            return redirect()->back()->with('error', '商品が選択されていません');
        }
        
        try {
            // 選択されたTransformationレコードを取得
            $transformations = Transformation::whereIn('id', $selectedItems)->get();
            
            // 選択された商品がない場合
            if ($transformations->isEmpty()) {
                return redirect()->back()->with('error', '選択された商品が見つかりませんでした');
            }
        
            // BOMを追加してUTF-8で正しく認識されるようにする
            $csvData = "\xEF\xBB\xBF"; // BOMを追加
            
            // ヘッダー行を追加
            $csvData .= "商品名,在庫数\n";
            
            foreach ($transformations as $transformation) {
                // CSVフォーマットで出力（カンマ区切り）
                $csvData .= $transformation->merchandises_name . "," . $transformation->numbers . "\n";
            }
            
            $fileName = 'merchandise_' . date('Y-m-d_His') . '.csv';
            
            // csvディレクトリが存在しない場合は作成
            if (!Storage::exists('public/csv')) {
                Storage::makeDirectory('public/csv');
            }
            
            // ファイルを保存（相対パスを使用）
            Storage::put('public/csv/' . $fileName, $csvData);
            
            // ファイルの保存場所を取得
            $filePath = storage_path('app/public/csv/' . $fileName);
            
            // ファイルが存在することを確認
            if (!file_exists($filePath)) {
                return redirect()->back()->with('error', 'ファイルの作成に失敗しました');
            }
            
            // Content-Typeヘッダーを追加してエンコーディングを指定
            return response()->download(
                $filePath,
                $fileName,
                ['Content-Type' => 'text/csv; charset=UTF-8']
            )->deleteFileAfterSend();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'CSV出力中にエラーが発生しました: ' . $e->getMessage());
        }
    }

    public function merchandise_detail(Request $request)
    {
        $merchandise = Merchandise::find($request->merchandise_id);
        
        return view('merchandise_detail', ['merchandises' => [$merchandise]]);
    }

    public function merchandise_edit(Request $request)
    {
        $shopId = $request->input('shop_id');
        $selectedShop = Shop::find($shopId);

        // 選択されたショップの商品のみを取得
        $merchandises = Merchandise::where('judge', $selectedShop->name)->get();

        $name = Name::first();
        $name->update(['main' => $selectedShop->name, 'detail' => $selectedShop->detail]);

        $transformations = Transformation::where('name', $selectedShop->name)->get();

        return view('merchandise_edit', ['name' => $name, 'merchandises' => $merchandises, 'transformations' => $transformations]);
    }

    public function cancel(Request $request)
    {
        Merchandise::find($request->id)->delete();
        return redirect('/')->with('message', 'Merchandiseを削除しました');
    }

    public function merchandise_registration()
    {
        $merchandises = Merchandise::all();
        $transformations = Transformation::all();

        return view('merchandise_registration', ['merchandises' => $merchandises, 'transformations' => $transformations]);
    }

    public function merchandise_redact(Request $request)
    {
        // 商品データの取得
        $merchandiseId = $request->input('merchandise_id');
        $merchandise = Merchandise::find($merchandiseId);

        // 対応するTransformationデータの取得
        $transformationId = $request->input('transformation_id');
        $transformation = Transformation::find($transformationId);

        return view('merchandise_redact', compact('merchandise', 'transformation'));
    }

    public function merchandise_thanks(MerchandiseRequest $request)
    {
        $name =  Name::first();

        $merchandise = [
            'judge' => $name->main,
            'name' => $request->input('name'),
            'image' => 'img/sample.png',  // デフォルト画像パス
            'description' => $request->input('description'),
            'description_details_short' => $request->input('description_details_short'),
            'description_details' => $request->input('description_details')
        ];
        Merchandise::create($merchandise);

        $transformation = [
            'name' => $name->main,
            'merchandises_name' => $request->input('name'),
            'numbers' => $request->input('numbers'),
            'is_favorite' => false
        ];
        Transformation::create($transformation);

        return view('merchandise_thanks');
    }

    public function merchandise_edit_thanks(MerchandiseRequest $request)
    {
        // 商品データの更新
        $merchandiseId = $request->input('merchandise_id');
        $merchandise = Merchandise::find($merchandiseId);

        $merchandise->update([
            'name' => $request->name,
            'description' => $request->description,
            'description_details_short' => $request->description_details_short,
            'description_details' => $request->description_details
        ]);

        // 対応するTransformationデータの取得
        $transformationId = $request->input('transformation_id');
        $transformation = Transformation::find($transformationId);

        $transformation->update([
            'numbers' => $request->numbers
        ]);

        return view('merchandise_edit_thanks');
    }

}
