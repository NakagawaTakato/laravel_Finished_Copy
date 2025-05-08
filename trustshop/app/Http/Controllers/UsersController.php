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

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $shops = Shop::all();

        return view('index', ['shops' => $shops]);
    }

    public function mypage(Request $request)
    {
        // セッションからshop_idを取得するか、リクエストから直接取得
        $shopId = $request->input('shop_id');
        
        $selectedShop = Shop::find($shopId);

        // 選択されたショップの商品のみを取得
        $merchandises = Merchandise::where('judge', $selectedShop->name)->get();

        $name = Name::first();
        $name->update(['main' => $selectedShop->name, 'detail' => $selectedShop->detail]);

        $shops = Shop::all();

        $transformations = Transformation::where('name', $selectedShop->name)->get();

        return view('mypage', ['shops' => $shops, 'name' => $name, 'merchandises' => $merchandises, 'transformations' => $transformations]);
    }

    public function thanks(Request $request)
    {
        $transformationId = $request->input('transformation_id');
        $transformation = Transformation::find($transformationId);

        if ($transformation->numbers > 0) {
            $transformation->update(['numbers' => $transformation->numbers - 1]);
        }

        return view('thanks');
    }

}
