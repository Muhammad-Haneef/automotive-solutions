<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leaves extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\LeavesFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [        
        'employee_id',
        'leave_type_id',
        'approved_by',
        'start_date',
        'end_date',
        'status',
        'reason',
        'sort_by',
        'is_active',
    ];
}
