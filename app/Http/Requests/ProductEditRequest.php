<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'thumbnail'=>'mimes:jpeg,jpg,png',
            'price'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'thumbnail.mimes' => 'Vui lòng chọn đúng định dạng!',
            'price.required' => 'Price Không được để trống!'
        ];
    }
}
