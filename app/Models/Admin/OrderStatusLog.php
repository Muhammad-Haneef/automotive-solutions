<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatusLog extends Model
{
    /** @use HasFactory<\Database\Factories\OrderStatusLogFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'changed_by',
        'previous_status',
        'new_status',
        'change_reason',
        'sort_by',
        'is_active',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function changedBy()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }
}
