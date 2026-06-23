<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentMethodRequest extends FormRequest
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
            'payment_gateway_id' => [
                'nullable',
                'exists:payment_gateways,id',
                function ($attribute, $value, $fail) {
                    if (!$value && !in_array(strtolower(request()->title), ['cash'])) {
                        $fail('The payment gateway ID is required unless the title is "cash".');
                    }
                },
            ],
            'title' => 'required|unique:payment_methods',
            'description' => [
                'required_if:payment_gateway_id,null',
                function ($attribute, $value, $fail) {
                    if (in_array(strtolower(request()->title), ['cash']) && !empty($value)) {
                        $fail('Description should not be provided when the title is "cash".');
                    }
                },
            ],
        ];
    }
}
