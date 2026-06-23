<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductFaq extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFaqFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'q',
        'a',
        'sort_by',
        'is_active',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
