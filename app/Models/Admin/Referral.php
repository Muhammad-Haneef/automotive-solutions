<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Referral extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\ReferralFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'referrer_id',
        'referred_id',
        'referral_code',
        'rewarded',
        'sort_by',
        'is_active',
    ];

    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id');
    }

    public function referred()
    {
        return $this->belongsTo(User::class, 'referred_id');
    }
}
