<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVideo extends Model
{
    /** @use HasFactory<\Database\Factories\ProductVideoFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'product_video_section_id',
        'title',
        'url',
        'type',
        'sort_by',
        'is_active',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function section()
    {
        return $this->belongsTo(ProductVideoSection::class, 'product_video_section_id');
    }
}
