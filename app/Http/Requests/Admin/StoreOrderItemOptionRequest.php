<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderItemOptionRequest extends FormRequest
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
            'order_item_id'=>'required',
            'attribute_group_id'=>'required',
            'attribute_value_id'=>'required',
            //'sort_by',
            //'is_active',
        ];
    }
}
