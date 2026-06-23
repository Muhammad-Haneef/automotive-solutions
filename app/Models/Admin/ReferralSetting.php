<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReferralSetting extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\ReferralSettingFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'message',
        'reward',
        'reward_type',
        'sort_by',
        'is_active',
    ];
}
