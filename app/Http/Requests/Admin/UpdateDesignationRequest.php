<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDesignationRequest extends BaseFormRequest
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
            'department_id' => ['required'],
            'title' => [
                'required',
                Rule::unique('designations')
                    ->ignore($this->route('id'))  // or $this->id depending on route model binding
                    ->where(function ($query) {
                        return $query->where('department_id', request('department_id'));
                    }),
            ],
            'slug' => [
                'required',
                Rule::unique('designations')
                    ->ignore($this->route('id'))  // or $this->id depending on route model binding
                    ->where(function ($query) {
                        return $query->where('department_id', request('department_id'));
                    }),
            ],
        ];
    }
}
