<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserTemp extends Model
{
    /** @use HasFactory<\Database\Factories\UserTempFactory> */
    use HasFactory, SoftDeletes;

    
    protected $fillable = [
        '',
        '',
        '',
        'sort_by',
        'is_active',
    ];

}
