<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    /** @use HasFactory<\Database\Factories\SupplierFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'logo',
        'title',
        'email',
        'address',
        'about',

        'contact_person',
        'contact_email',
        'contact_phone',
        'website',

        'sort_by',
        'is_active',
    ];

}
