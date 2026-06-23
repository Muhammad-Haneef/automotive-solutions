<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderGiftWrap extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\OrderGiftWrapFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id', 
        'gift_wrap_id', 
        'message', 
        'price', 
        'sort_by', 
        'is_active'
    ];

    public function giftWrap()
    {
        return $this->belongsTo(GiftWrap::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
