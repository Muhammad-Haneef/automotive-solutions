<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\TrainingFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [        
        'employee_id',
        'training_name',
        'training_type',
        'start_date',
        'end_date',
        'trainer',
        'status',
        'certificate_url',
        'sort_by',
        'is_active',
    ];
}
