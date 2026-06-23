<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatus extends Model
{
    /** @use HasFactory<\Database\Factories\OrderStatusFactory> */
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'title',
        'description',
        'sort_by',
        'is_active',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'status_id');
    }
}
