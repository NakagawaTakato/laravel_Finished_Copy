<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MerchandiseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:191'],
            'description' => ['required', 'numeric', 'min:0', 'max:1000000'],
            'description_details_short' => ['required', 'string', 'max:1000'],
            'description_details' => ['required', 'string', 'max:1000'],
            'numbers' => ['required', 'numeric', 'min:0', 'max:100']
        ];
    }

    /**
     * バリデーション失敗時の処理をカスタマイズ
     */
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        // 元のリクエストデータを取得
        $merchandiseId = $this->input('merchandise_id');
        $transformationId = $this->input('transformation_id');
        
        // セッションにIDを保存
        session()->flash('merchandise_id', $merchandiseId);
        session()->flash('transformation_id', $transformationId);
        
        // 親クラスの処理を呼び出し
        parent::failedValidation($validator);
    }

    public function messages()
    {
        return [
            'name.required' => '商品名は必須です',
            'name.max' => '商品名は191文字以内で入力してください',
            'description.required' => '値段は必須です',
            'description.numeric' => '値段は数値で入力してください',
            'description.min' => '値段は0以上で入力してください',
            'description.max' => '値段は1,000,000以下で入力してください',
            'description_details_short.required' => '詳細説明は必須です',
            'description_details_short.max' => '詳細説明は1000文字以内で入力してください',
            'description_details.required' => '詳細説明(詳しく)は必須です',
            'description_details.max' => '詳細説明(詳しく)は1000文字以内で入力してください',
            'numbers.required' => '商品数は必須です',
            'numbers.numeric' => '商品数は数値で入力してください',
            'numbers.min' => '商品数は0以上で入力してください',
            'numbers.max' => '商品数は100以下で入力してください',
        ];
    }
}