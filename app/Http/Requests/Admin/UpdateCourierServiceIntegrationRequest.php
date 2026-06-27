<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class UpdateCourierServiceIntegrationRequest extends BaseFormRequest
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
            'courier_service_id' => 'required',
            'api_user_name' => 'required|unique:courier_service_integrations,api_user_name,' . $this->route('id'),
            'api_key' => 'required|unique:courier_service_integrations,api_key,' . $this->route('id'),
            'api_url' => 'required',
            'tracking_url' => 'required',
        ];
    }
}
