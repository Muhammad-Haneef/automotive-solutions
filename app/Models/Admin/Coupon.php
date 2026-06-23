<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Coupon extends Model
{
    /** @use HasFactory<\Database\Factories\CouponFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image',
        'title',
        'description',
        'code',
        'type',
        'discount',
        'minimum_spend',
        'usage_limit',
        'used_count',
        'start_date',
        'end_date',
        'sort_by',
        'is_active',
    ];

    protected $casts = [
        'start_date'  => 'datetime',
        'end_date' => 'datetime',
    ];

    public function isValid(): bool
    {
        return $this->status
            && ($this->usage_limit === null || $this->used_count < $this->usage_limit)
            && ($this->end_date === null || Carbon::now()->lessThan($this->end_date));
    }


    public function usages()
    {
        return $this->hasMany(CouponUsage::class);
    }

    public function remainingUsage(): int
    {
        return $this->usage_limit ? $this->usage_limit - $this->usages()->count() : PHP_INT_MAX;
    }
    
}
