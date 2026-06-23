<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreShipperRequest extends FormRequest
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
            'logo' => 'nullable',
            'title' => 'required|string|max:255|unique:shippers,title',
            'email' => 'nullable|email|max:255|unique:shippers,email',

            //'about' => '',

            'contact_person' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255|unique:shippers,contact_email',
            'contact_phone' => 'nullable|string|max:20|unique:shippers,contact_phone',

            'tracking_url' => 'nullable|url|max:255',
            'website' => 'nullable|url|max:255',
            //'shipping_methods' => 'nullable|json',
            'min_delivery_time' => 'nullable|integer|min:1',
            'max_delivery_time' => 'nullable|integer|min:1|gte:min_delivery_time',
            //'cost_type' => 'required|in:flat,weight_based,distance_based,free',
            'cost_type' => 'required',
            'base_shipping_cost' => 'nullable|numeric|min:0',
            'additional_cost_per_kg' => 'nullable|numeric|min:0',
            'additional_cost_per_km' => 'nullable|numeric|min:0',
            //'coverage_countries' => 'nullable|json',
            //'coverage_regions' => 'nullable|json',
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'The Company Name field is required.',
            'title.string'   => 'The Company Name must be a string.',
            'title.max'      => 'The Company Name may not be greater than 255 characters.',
            'title.unique'   => 'This Company Name already exists.',
        ];
    }
}
