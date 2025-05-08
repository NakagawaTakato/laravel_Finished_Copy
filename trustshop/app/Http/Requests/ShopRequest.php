<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:191'],
            'detail' => ['required', 'string', 'max:1000'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ショップ名は必須です',
            'name.string' => 'ショップ名は文字列の必要があります',
            'name.max' => 'ショップ名は191字が上限です',
            'detail.required' => 'ショップ説明は必須です',
            'detail.max' => 'ショップ説明は1000文字以内で入力してください',
        ];
    }
}
