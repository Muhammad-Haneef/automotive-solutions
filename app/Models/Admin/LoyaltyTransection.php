<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoyaltyTransection extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\LoyaltyTransectionFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'order_id',
        'points',
        'type',
        'status',
        'sort_by',
        'is_active',
    ];

}
