<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compare extends Model
{
    /** @use HasFactory<\Database\Factories\CompareFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'product_id',
        'sort_by',
        'is_active',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($compare) {
            $exists = Compare::where('user_id', $compare->user_id)
                ->where('product_id', $compare->product_id)
                ->exists();

            if ($exists) {
                throw new \Exception('Product is already in your compare list');
            }
        });
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
