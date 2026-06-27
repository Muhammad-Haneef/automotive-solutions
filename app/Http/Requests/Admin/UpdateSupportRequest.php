<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class UpdateSupportRequest extends BaseFormRequest
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
            'support_type_id' => 'required',
            'support_status_id' => 'required',
            'code' => 'required',
            // 'name'=>'required',
            // 'email'=>'required',
            // 'contact'=>'required',
            // 'subject'=>'required',
            // 'message'=>'required',
            'status' => 'required',
            // 'callback_at'=>'required',
        ];
    }
}
