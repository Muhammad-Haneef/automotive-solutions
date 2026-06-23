<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSmsApiIntegrationRequest extends FormRequest
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
            'sms_gateway_id'=>'required',
            'api_user_name'=>'required',
            'api_url'=>'required',
            'api_key'=>'required|unique:sms_api_integrations',
            'api_password'=>'required',
            //'mask'=>'required',
            'is_default_gateway'=>'required',
            //'sort_by'=>'required',
            //'is_active'=>'required',
        ];
    }
}
