<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class UpdatePromotionRequest extends BaseFormRequest
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
            'old_position' => 'required',
            'new_position' => 'required',
            'old_salary' => 'required',
            'new_salary' => 'required',
            'promotion_date' => 'required',
            'approved_by' => 'required',
            'reason' => 'required',
            // 'sort_by' => 'required',
            // 'is_active' => 'required',
        ];
    }
}
