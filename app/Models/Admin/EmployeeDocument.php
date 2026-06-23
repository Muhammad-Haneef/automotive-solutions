<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeDocument extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\EmployeeDocumentFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [        
        'employee_id',
        'document_type',
        'file_path',
        'sort_by',
        'is_active',
    ];
}
