<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation(): void
    {
        try {
            $normalized = [];

            foreach ($this->all() as $key => $value) {
                if (is_string($value)) {
                    // Safe normalization
                    $normalized[$key] = trim(preg_replace('/\s+/', ' ', $value));
                } else {
                    $normalized[$key] = $value;
                }
            }

            $this->merge($normalized);
        } catch (\Exception $e) {
            // اگر error ہو تو log کریں
            \Log::error('BaseFormRequest Error: ' . $e->getMessage());
        }
    }
}
