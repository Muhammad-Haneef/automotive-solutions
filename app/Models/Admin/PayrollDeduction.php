<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PayrollDeduction extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PayrollDeductionFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [        
        'payroll_id',
        'deduction_type',
        'amount',
        'sort_by',
        'is_active',
    ];
}
