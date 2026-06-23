<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\AttendanceFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [        
        'employee_id',
        'date',
        'check_in',
        'check_out',
        'status',
        'sort_by',
        'is_active',
    ];
}
