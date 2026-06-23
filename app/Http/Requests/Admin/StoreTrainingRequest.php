<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingRequest extends FormRequest
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
            'training_name' => 'required',
            'training_type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'trainer' => 'required',
            'status' => 'required',
            'certificate_url' => 'required',
            //'sort_by' => 'required',
            //'is_active' => 'required',
        ];
    }
}
