<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePayrollRequest extends FormRequest
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
            'employee_id' => 'required',
            'salary_month' => 'required',
            'basic_salary' => 'required',
            'tax_deduction' => 'required',
            'bonus' => 'required',
            'net_salary' => 'required',
            'payment_status' => 'required',
            'paid_on' => 'required',
            //'sort_by' => 'required',
            //'is_active' => 'required',
        ];
    }
}
