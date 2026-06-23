<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveType extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\LeaveTypeFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [        
        'title',
        'description',
        'max_days',
        'sort_by',
        'is_active',
    ];
}
