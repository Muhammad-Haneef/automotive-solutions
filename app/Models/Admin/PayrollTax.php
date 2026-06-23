<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PayrollTax extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PayrollTaxFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [        
        'payroll_id',
        'tax_type',
        'tax_rate',
        'tax_amount',
        'sort_by',
        'is_active',
    ];
}
