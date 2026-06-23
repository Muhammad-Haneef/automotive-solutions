<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Str;

class PaymentGateway extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentGatewayFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        
        'title',
        'slug',
        'logo',
        'description',        
        'api_key',
        'secret_key',
        'website',
        'public_key',
        'merchant_id',
        'callback_url',
        'sandbox_mode',
        'transaction_fee',
        'min_transaction',
        'max_transaction',
        'sort_by',
        'is_active',
        
    ];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($gateway) {
            $gateway->slug = Str::slug($gateway->title);
        });
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function paymentMethods()
    {
        return $this->hasMany(PaymentMethod::class);
    }
}
