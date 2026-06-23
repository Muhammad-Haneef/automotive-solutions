<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerLocation extends Model
{
    /** @use HasFactory<\Database\Factories\BannerLocationFactory> */
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'title',
        'description',
        'sort_by',
        'is_active',
    ];

    public function banners()
    {
        return $this->hasMany(Banner::class, 'banner_location_id');
    }

}
