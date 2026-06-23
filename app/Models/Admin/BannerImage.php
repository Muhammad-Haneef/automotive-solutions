<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerImage extends Model
{
    /** @use HasFactory<\Database\Factories\BannerImageFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'banner_id',
        'image_alt',
        'image_link',
        'image_url',
        'image_sort_by',
        'image_is_active',
    ];

    public function banner()
    {
        return $this->belongsTo(Banner::class, 'banner_id');
    }

}
