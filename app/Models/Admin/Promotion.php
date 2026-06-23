<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PromotionFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [        
        'employee_id',
        'old_position',
        'new_position',
        'old_salary',
        'new_salary',
        'promotion_date',
        'approved_by',
        'reason',
        'sort_by',
        'is_active',
    ];
}
