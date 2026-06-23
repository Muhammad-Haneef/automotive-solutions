<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warning extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\WarningFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [        
        'employee_id',
        'issued_by',
        'warning_type',
        'warning_reason',
        'warning_date',
        'status',
        'sort_by',
        'is_active',
    ];
}
