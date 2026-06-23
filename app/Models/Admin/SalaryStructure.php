<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalaryStructure extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\SalaryStructureFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [        
        'role_id',
        'department_id',
        'base_salary',
        'allowance_percentage',
        'tax_percentage',
        'sort_by',
        'is_active',
    ];
}
