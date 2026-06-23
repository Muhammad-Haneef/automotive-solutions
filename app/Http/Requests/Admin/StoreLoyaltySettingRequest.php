<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoyaltySettingRequest extends FormRequest
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
            'earn_rate' => ['required', 'numeric', 'min:0.01'],
            'redeem_rate' => ['required', 'numeric', 'min:0.01'],
            'expiration_days' => ['required', 'integer', 'min:1'],
        ];
    }

    public function messages(): array
    {
        return [
            'earn_rate.required' => 'The earn rate is required.',
            'earn_rate.numeric' => 'Earn rate must be a numeric value.',
            'earn_rate.min' => 'Earn rate must be at least 0.01.',

            'redeem_rate.required' => 'The redeem rate is required.',
            'redeem_rate.numeric' => 'Redeem rate must be a numeric value.',
            'redeem_rate.min' => 'Redeem rate must be at least 0.01.',

            'expiration_days.required' => 'Expiration days are required.',
            'expiration_days.integer' => 'Expiration days must be an integer.',
            'expiration_days.min' => 'Expiration days must be at least 1.',
        ];
    }
}
