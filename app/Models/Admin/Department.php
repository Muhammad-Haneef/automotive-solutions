<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\DepartmentFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [        
        'title',
        'slug',
        'description',
        'sort_by',
        'is_active',
    ];
}
