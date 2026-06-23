<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'vendor_id',
        'order_source_id',
        'coupon_id',
        'confirmed_by',
        'status_id',
        'shipping_address_id',
        'billing_address_id',
        'order_date',
        'order_no',
        'referral_code',
        'instructions',
        'qty',
        'subtotal',
        'advance',
        'discount',
        'tax',
        'redeem_amount',
        'shipping_cost',
        'total',
        'customer_notes',
        'admin_notes',
        'payment_method',
        'payment_status',
        'payment_date',
        'transaction_id',
        'shipper_id',
        'shipping_method',
        'shipping_status',
        'estimated_delivery_date',
        'shipper_slip_link',
        'shipped_result',
        'shipped_ref',
        'tracking_number',
        'tracking_result',
        'tracking_result_complete',
        'cancellation_reason',
        'return_reason',
        'commission_fee',
        'vendor_earnings',
        'payout_status',
        'sort_by',
        'is_active',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }

    public function confirmedBy()
    {
        return $this->belongsTo(User::class, 'confirmed_by');
    }

    public function source()
    {
        return $this->belongsTo(OrderSource::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function status()
    {
        return $this->belongsTo(User::class, 'status_id');
    }

    public function shippingAddress()
    {
        return $this->belongsTo(AddressBook::class, 'shipping_address_id');
    }

    public function billingAddress()
    {
        return $this->belongsTo(AddressBook::class, 'billing_address_id');
    }

    public function shipper()
    {
        return $this->belongsTo(Shipper::class);
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function statusLogs()
    {
        return $this->hasMany(OrderStatusLog::class);
    }
    public function paymentGateway()
    {
        return $this->belongsTo(PaymentGateway::class);
    }
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
    public function courierService()
    {
        return $this->belongsTo(CourierService::class);
    }
    public function supports()
    {
        return $this->hasMany(Support::class, 'order_id');
    }
}
