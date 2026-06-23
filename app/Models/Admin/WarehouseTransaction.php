<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WarehouseTransaction extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\WarehouseTransactionFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'warehouse_id',
        'product_id',
        'type',
        'quantity',
        'from_warehouse_id',
        'to_warehouse_id',
        'remarks',
        'sort_by',
        'is_active',
    ];
}
