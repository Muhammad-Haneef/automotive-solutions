<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payroll extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PayrollFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [        
        'employee_id',
        'salary_month',
        'basic_salary',
        'tax_deduction',
        'bonus',
        'net_salary',
        'payment_status',
        'paid_on',
        'sort_by',
        'is_active',
    ];
}
