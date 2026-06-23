<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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

            'user_id' => 'required',
            //'vendor_id' => 'required',
            'order_source_id' => 'required',
            //'coupon_id' => 'required',
            //'confirmed_by' => 'required',
            //'status_id' => 'required',
            //'shipping_address_id' => 'required',
            //'billing_address_id' => 'required',
            //'order_date' => 'required',
            //'order_no' => 'required',
            //'referral_code' => 'required',
            //'instructions' => 'required',
            'qty' => 'required',
            'subtotal' => 'required',
            //'advance' => 'required',
            //'discount' => 'required',
            //'tax' => 'required',
            //'redeem_amount' => 'required',
            //'shipping_cost' => 'required',
            'total' => 'required',
            //'customer_notes' => 'required',
            //'admin_notes' => 'required',
            //'payment_method' => 'required',
            //'payment_status' => 'required',
            //'payment_date' => 'required',
            //'transaction_id' => 'required',
            //'shipper_id' => 'required',
            //'shipping_method' => 'required',
            //'shipping_status' => 'required',
            //'estimated_delivery_date' => 'required',
            //'shipper_slip_link' => 'required',
            //'shipped_result' => 'required',
            //'shipped_ref' => 'required',
            //'tracking_number' => 'required',
            //'tracking_result' => 'required',
            //'tracking_result_complete' => 'required',
            //'cancellation_reason' => 'required',
            //'return_reason' => 'required',
            //'commission_fee' => 'required',
            //'vendor_earnings' => 'required',
            //'payout_status' => 'required',
            //'sort_by' => 'required',
            //'is_active' => 'required',
        ];
    }
}
