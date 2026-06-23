<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\EmployeeFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [        
        'department_id',
        'designation_id',
        'role_id',
        'image',
        'name',
        'email',
        'phone',
        'gender',
        'dob',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'date_of_joining',
        'status',
        'salary',
        'sort_by',
        'is_active',
    ];

}
