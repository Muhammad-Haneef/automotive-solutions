<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class StoreVendorRequest extends BaseFormRequest
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
            // 'user_id' => 'required',
            // 'payment_method_id'=>'required',
            // 'logo'=>'required',
            'title' => 'required|unique:vendors',
            'slug' => 'required|unique:vendors',
            // 'email' => 'required|unique:vendors',
            // 'description'=>'required',
            // 'website'=>'required',
            // 'address'=>'required',
            // 'contact'=>'required',
            // 'sort_by'=>'required',
            // 'is_active'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'Please select a store owner.',
        ];
    }
}
