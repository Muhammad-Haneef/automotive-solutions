<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWarehouseRequest extends FormRequest
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
            'system_user_id'=>'required',
            'title'=>'required|unique:warehouses,title,id'.$this->route('id'),
            'address'=>'required|unique:warehouses,title,id'.$this->route('id'),
            'contact'=>'required|unique:warehouses,title,id'.$this->route('id'),
        ];
    }
}
