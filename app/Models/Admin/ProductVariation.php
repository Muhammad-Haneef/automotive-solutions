<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariation extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\ProductVariationFactory> */
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'product_id',
        'attribute_id',
        'attribute_value_id',

        'sku',
        'image',
        'cost',
        'price',
        'sale_price',

        'sort_by',
        'is_active',
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function attributeValue()
    {
        return $this->belongsTo(AttributeValue::class);
    }

}
