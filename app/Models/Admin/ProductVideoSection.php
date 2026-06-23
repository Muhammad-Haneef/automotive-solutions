<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVideoSection extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\ProductVideoSectionFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'title',
        'description',
        'per_row',
        'show_title',
        'show_description',
        'show_video_title',
        'sort_by',
        'is_active',
    ];

    /**
     * A ProductVideoSection belongs to a Product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function videos()
    {
        return $this->hasMany(ProductVideo::class);
    }
}
