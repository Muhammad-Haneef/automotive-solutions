<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentGatewayRequest extends BaseFormRequest
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
            'title' => 'required|string|max:255|unique:payment_gateways,title,' . $this->route('id'),
            // 'slug' => 'required|string|max:255|unique:payment_gateways,slug,'.$this->route('id'),
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'description' => 'nullable|string',
            'api_key' => 'required|string|max:255',
            'secret_key' => 'required|string|max:255',
            'public_key' => 'required|string|max:255',
            'merchant_id' => 'required|string|max:255',
            'callback_url' => 'nullable|url|max:255',
            'sandbox_mode' => 'boolean',
            'transaction_fee' => 'nullable|numeric|min:0|regex:/^\d{1,8}(\.\d{1,2})?$/',
            'min_transaction' => 'nullable|numeric|min:0|regex:/^\d{1,8}(\.\d{1,2})?$/',
            'max_transaction' => 'nullable|numeric|min:0|regex:/^\d{1,8}(\.\d{1,2})?$/|gte:min_transaction',
        ];
    }
}
