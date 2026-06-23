<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWalletTransactionRequest extends FormRequest
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
            'transaction_type'=>'required',
            'amount'=>'required',
            'currency'=>'required',
            'reference_id'=>'nullable|required',
            'payment_method'=>'nullable|required',
            'description'=>'nullable|required',
            'status'=>'nullable|required',
            'processed_at'=>'nullable|required',
        ];
    }
}
