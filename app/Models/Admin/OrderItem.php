<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    /** @use HasFactory<\Database\Factories\OrderItemFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'order_vendor_id',
        'product_id',
        'vendor_id',
        'qty',
        'price',
        'subtotal',
        'discount',
        'tax',
        'total',
        'cost',
        'cost_total',
        'status',
        'return_reason',
        'cancellation_reason',
        'sort_by',
        'is_active',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id');
    }
    public function options()
    {
        return $this->hasMany(OrderItemOption::class);
    }
}
