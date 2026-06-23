<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreWalletPayoutRequestRequest extends FormRequest
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
            'wallet_id'=>'required',
            'user_id'=>'required',
            'amount'=>'required',
            'currency'=>'required',
            'payment_method'=>'nullable|required',
            'status'=>'nullable|required',
            'admin_notes'=>'nullable|required',
            'processed_at'=>'nullable|required',
        ];
    }
}
