<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipper extends Model
{
    /** @use HasFactory<\Database\Factories\ShipperFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'logo',
        'title',
        'email',
        'about',

        'contact_person',
        'contact_email',
        'contact_phone',
        
        'tracking_url',
        'website',
        //'shipping_methods',
        'min_delivery_time',
        'max_delivery_time',
        'cost_type',
        'base_shipping_cost',
        'additional_cost_per_kg',
        'additional_cost_per_km',
        //'coverage_countries',
        //'coverage_regions',
        'sort_by',
        'is_active',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
