<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssociatedFaq extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\AssociatedFaqFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'associated_type',
        'associated_id',
        'q',
        'a',
        'sort_by',
        'is_active',
    ];
}
