<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PayrollAllowance extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PayrollAllowanceFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [        
        'payroll_id',
        'allowance_type',
        'amount',
        'sort_by',
        'is_active',
    ];
}
