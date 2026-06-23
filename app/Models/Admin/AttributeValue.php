<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeValue extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\AttributeValueFactory> */
    use HasFactory, SoftDeletes;



    protected $fillable = [
        'attribute_id',
        'title',
        'sort_by',
        'is_active',
    ];


    public function productAttributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
    public function orderItemOptions()
    {
        return $this->hasMany(OrderItemOption::class);
    }

}
