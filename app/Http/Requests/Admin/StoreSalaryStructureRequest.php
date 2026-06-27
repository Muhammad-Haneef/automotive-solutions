<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class StoreSalaryStructureRequest extends BaseFormRequest
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
            'role_id' => 'required',
            'department_id' => 'required',
            'base_salary' => 'required',
            'allowance_percentage' => 'required',
            'tax_percentage' => 'required',
            // 'sort_by' => 'required',
            // 'is_active' => 'required',
        ];
    }
}
