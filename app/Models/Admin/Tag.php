<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'title',
        'description',
        'sort_by',
        'is_active',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tags');
    }
}
