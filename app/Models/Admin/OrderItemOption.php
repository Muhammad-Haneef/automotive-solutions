<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItemOption extends Model
{
    /** @use HasFactory<\Database\Factories\OrderItemOptionFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_item_id',
        'attribute_group_id',
        'attribute_value_id',
        'sort_by',
        'is_active',
    ];

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function attributeGroup()
    {
        return $this->belongsTo(AttributeGroup::class);
    }

    public function attributeValue()
    {
        return $this->belongsTo(AttributeValue::class);
    }
}
