<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends BaseFormRequest
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
            // 'title'=>'required|unique:,title,'.$this->route('id'),
            // 'logo'=>'required',
            'title' => 'required|unique:suppliers',
            'email' => 'nullable|unique:suppliers',
            'contact_person' => 'nullable|unique:suppliers',
            'contact_email' => 'nullable|unique:suppliers',
            'contact_phone' => 'nullable|unique:suppliers',
            'address' => 'nullable',
        ];
    }
}
