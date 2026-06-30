<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    /** @use HasFactory<\Database\Factories\PageFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'banner',
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'sort_by',
        'is_active',
    ];
}
