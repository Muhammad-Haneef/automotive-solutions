<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PayrollPayment extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PayrollPaymentFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [        
        'payroll_id',
        'employee_id',
        'payment_method',
        'tamount_paidransaction_id',
        'payment_date',
        'status',
        'sort_by',
        'is_active',
    ];
}
