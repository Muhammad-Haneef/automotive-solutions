<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderItemRequest extends FormRequest
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
            //'title'=>'required|unique:,title,'.$this->route('id'),

            'order_id' => 'required',
            //'order_vendor_id' => 'required',
            'product_id' => 'required',
            'vendor_id' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'subtotal' => 'required',
            //'discount' => 'required',
            //'tax' => 'required',
            'total' => 'required',
            //'cost',
            //'cost_total',
            //'status',
            //'return_reason',
            //'cancellation_reason',
            //'sort_by',
            //'is_active',
        ];
    }
}
