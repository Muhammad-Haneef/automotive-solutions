<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WarehouseProduct extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\WarehouseProductFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'warehouse_id',
        'product_id',
        'quantity',
        'sort_by',
        'is_active',
    ];
}
