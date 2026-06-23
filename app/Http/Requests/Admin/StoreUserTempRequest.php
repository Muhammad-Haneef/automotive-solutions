<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserTempRequest extends FormRequest
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
            //'title'=>'required|unique:,title,'.$this->route('id'),
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'contact' => 'nullable|string|max:20',
            'password' => 'required|min:8',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'dob' => 'nullable|date',
            'gender' => 'nullable|in:male,female,other',
            'newsletter_subscription' => 'boolean',
            'referral_code' => 'nullable|string|max:255',
            'customer_notes' => 'nullable|string',
        ];
    }
}
