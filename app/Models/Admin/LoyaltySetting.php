<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoyaltySetting extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\LoyaltySettingFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'earn_rate',
        'redeem_rate',
        'expiration_days',
        'sort_by',
        'is_active',
    ];
}
