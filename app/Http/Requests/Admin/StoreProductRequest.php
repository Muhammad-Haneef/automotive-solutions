<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|unique:products,title',
            'slug'=>'required|unique:products,slug',
            'excerpt'=>'required',
            'category_id'=>'required',
            //'brand_id'=>'required',
            //'sku'=>'required|unique:products',
            'thumbnail'=>'required',
            'price'=>'required',
            'sale_price'=>'required',
        ];
    }
}
