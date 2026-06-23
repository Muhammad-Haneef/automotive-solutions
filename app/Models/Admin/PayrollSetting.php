<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PayrollSetting extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PayrollSettingFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [        
        'salary_cycle',
        'overtime_rate',
        'tax_policy',
        'default_payment_method',
        'sort_by',
        'is_active',
    ];
}
