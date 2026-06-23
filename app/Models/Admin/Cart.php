<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'session_id',
        'product_id',
        'variation_id',
        'quantity',
        'price',
        'sale_price',
        'options',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function variation()
    {
        return $this->belongsTo(ProductVariation::class);
    }

    // Get effective price
    public function getEffectivePriceAttribute()
    {
        return $this->sale_price ?? $this->price;
    }

    // Get line total
    public function getLineTotalAttribute()
    {
        return $this->effective_price * $this->quantity;
    }
}