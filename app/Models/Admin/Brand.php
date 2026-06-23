<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    /** @use HasFactory<\Database\Factories\BrandFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'logo',
        'title',
        'slug',
        'email',
        'address',
        'about',
        'logo',
        'contact_person',
        'contact_email',
        'contact_phone',
        'website',
        'description',
        'show_on_front',
        'show_description_on_front',
        'sort_by',
        'is_active',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
