<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'parent_id',
        'title',
        'slug',
        'description',
        'thumbnail',
        'banner',
        'icon',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'show_banner',
        'show_description',
        'show_description_at',
        'sort_by',
        'is_active',
    ];

    /*
    protected $fillable = ['name', 'parent_id'];
  */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('children');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
  

   /*
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
 
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    */

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }
}
