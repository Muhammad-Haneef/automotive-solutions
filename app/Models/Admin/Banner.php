<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Banner extends Model
{
    /** @use HasFactory<\Database\Factories\BannerFactory> */
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'banner_location_id',
        'title',
        'description',
        'display',
        'sort_by',
        'is_active',
    ];

    public function images()
    {
        return $this->hasMany(BannerImage::class);
    }

    public function location()
    {
        return $this->belongsTo(BannerLocation::class, 'banner_location_id');
    }

}
