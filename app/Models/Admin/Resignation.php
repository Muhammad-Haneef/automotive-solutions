<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resignation extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\ResignationFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [        
        'employee_id',
        'resignation_date',
        'last_working_day',
        'reason',
        'status',
        'approved_by',
        'sort_by',
        'is_active',
    ];
}
