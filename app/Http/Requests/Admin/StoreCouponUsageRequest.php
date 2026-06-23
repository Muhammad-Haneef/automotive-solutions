<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCouponUsageRequest extends FormRequest
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
            'coupon_id'=>'required',
            'user_id'=>'required',
            'order_id'=>'required',
            'discount_applied'=>'required',
            //'sort_by'=>'nullable',
            //'is_active'=>'nullable'
        ];
    }
}
