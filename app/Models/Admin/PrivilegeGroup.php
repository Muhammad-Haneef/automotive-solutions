<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrivilegeGroup extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PrivilegeGroupFactory> */
    use HasFactory;

    
    protected $fillable = [
        'title',
        'sort_by',
        'is_active',
    ];
}
