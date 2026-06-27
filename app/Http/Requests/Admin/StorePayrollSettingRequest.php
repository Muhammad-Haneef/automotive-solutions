<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class StorePayrollSettingRequest extends BaseFormRequest
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
            'salary_cycle' => 'required',
            'overtime_rate' => 'required',
            'tax_policy' => 'required',
            'default_payment_method' => 'required',
            // 'sort_by' => 'required',
            // 'is_active' => 'required',
        ];
    }
}
