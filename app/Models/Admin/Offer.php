<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\OfferFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image',
        'title',
        'description',
        'offer_scope',
        'discount',
        'discount_type',
        'start_date',
        'end_date',
        'sort_by',
        'is_active',
    ];

    public function items(){
        return $this->hasMany(OfferItem::class);
    }

}