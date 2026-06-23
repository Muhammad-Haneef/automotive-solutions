<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\WarehouseFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'system_user_id',
        'title',
        'address',
        'contact',

        'city',
        'state',
        'country',
        'postal_code',
        'latitude',
        'longitude',
        'capacity',
        'current_stock',

        'sort_by',
        'is_active',
    ];
}
