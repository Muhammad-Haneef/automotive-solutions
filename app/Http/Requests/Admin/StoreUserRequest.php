<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
// use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends BaseFormRequest
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
        // 'title'=>'required|unique:,title,'.$this->route('id'),
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'contact' => 'nullable|string|max:20',
            'password' => 'required|min:8',
            'account_status' => 'required',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'dob' => 'nullable|date',
            // 'gender' => 'nullable|in:male,female,other',
            'newsletter_subscription' => 'boolean',
            'referral_code' => 'nullable|string|max:255',
            'customer_notes' => 'nullable|string',
        ];
    }
}
