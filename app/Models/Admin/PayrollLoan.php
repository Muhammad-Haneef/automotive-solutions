<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PayrollLoan extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PayrollLoanFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [        
        'employee_id',
        'loan_amount',
        'monthly_deduction',
        'remaining_balance',
        'loan_status',
        'sort_by',
        'is_active',
    ];
}
