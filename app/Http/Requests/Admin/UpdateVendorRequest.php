<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class UpdateVendorRequest extends BaseFormRequest
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
            'title' => 'required|unique:vendors,title,' . $this->route('id'),
            'slug' => 'required|unique:vendors,slug,' . $this->route('id'),
            // 'email'=>'required|unique:vendors,email,' . $this->route('id'),
            // 'description'=>'required',
            // 'website'=>'required',
            // 'address'=>'required',
            // 'contact'=>'required',
            // 'sort_by'=>'required',
            // 'is_active'=>'required'
        ];
    }
}
