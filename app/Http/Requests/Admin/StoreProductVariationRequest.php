<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductVariationRequest extends FormRequest
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
            'product_id'=>'required',
            'attribute_id'=>'required',
            'attribute_value_id'=>'required',
            //'sku'=>'required',
            'image'=>'required',
            //'cost'=>'required',
            'price'=>'required',
            'sale_price'=>'required',
            //'sort_by'=>'required',
            //'is_active'=>'required',
        ];
    }
}
