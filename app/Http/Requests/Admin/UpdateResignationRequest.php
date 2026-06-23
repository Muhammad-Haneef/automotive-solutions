<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResignationRequest extends FormRequest
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
            'resignation_date' => 'required',
            'last_working_day' => 'required',
            'reason' => 'required',
            'status' => 'required',
            'approved_by' => 'required',
            //'sort_by' => 'required',
            //'is_active' => 'required',
        ];
    }
}
