<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSupplierRequest extends FormRequest
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
            'title'=>'required|unique:suppliers,title,'.$this->route('id'),
            'email'=>'required|unique:suppliers,email,'.$this->route('id'),
            'contact_person'=>'required|unique:suppliers,contact_person,'.$this->route('id'),
            'contact_email'=>'required|unique:suppliers,contact_email,'.$this->route('id'),
            'contact_phone'=>'required|unique:suppliers,contact_phone,'.$this->route('id'),
            'address'=>'required',
        ];
    }
}
