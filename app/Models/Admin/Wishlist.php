<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wishlist extends Model
{
    /** @use HasFactory<\Database\Factories\WishlistFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'product_id',
        'qty',
        'description',
        'sort_by',
        'is_active',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($wishlist) {
            $exists = Wishlist::where('user_id', $wishlist->user_id)
                ->where('product_id', $wishlist->product_id)
                ->exists();

            if ($exists) {
                throw new \Exception('Product is already in your wishlist');
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
