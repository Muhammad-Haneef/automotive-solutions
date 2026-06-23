<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentMethodFactory> */
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'payment_gateway_id',
        'title',
        'description',
        'sort_by',
        'is_active',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function PaymentGateway()
    {
        return $this->belongsTo(PaymentGateway::class);
    }
}
