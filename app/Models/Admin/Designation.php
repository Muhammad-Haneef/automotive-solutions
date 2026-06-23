<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Designation extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\DesignationFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [        
        'department_id',
        'title',
        'slug',
        'description',
        'sort_by',
        'is_active',
    ];
}
