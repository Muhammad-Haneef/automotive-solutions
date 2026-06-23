<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerformanceReview extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PerformanceReviewFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [        
        'employee_id',
        'reviewed_by',
        'review_date',
        'score',
        'feedback',
        'sort_by',
        'is_active',
    ];
}
