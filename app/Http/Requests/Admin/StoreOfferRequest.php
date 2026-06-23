<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfferRequest extends FormRequest
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
            //'image'=>'required',
            'title'=>'required|unique:offers',
            //'description'=>'required',
            'offer_scope'=>'required',
            'offer_items' => 'required|array|min:1',
            'discount'=>'required',
            'discount_type'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            //'sort_by'=>'required',
            //'is_active'=>'required',
        ];
    }
}
