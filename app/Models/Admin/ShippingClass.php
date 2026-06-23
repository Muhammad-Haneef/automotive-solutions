<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class ShippingClass extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\ShippingClassFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'base_rate',
        'per_weight_rate',
        'sort_by',
        'is_active',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
