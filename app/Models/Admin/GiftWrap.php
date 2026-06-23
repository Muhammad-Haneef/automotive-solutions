<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GiftWrap extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\GiftWrapFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 
        'description', 
        'image', 
        'price', 
        'sort_by', 
        'is_active'
    ];

    public function orderGiftWraps()
    {
        return $this->hasMany(OrderGiftWrap::class);
    }
}
