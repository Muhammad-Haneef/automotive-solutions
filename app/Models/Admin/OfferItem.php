<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfferItem extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'offer_id',
        'item_id',
        'sort_by',
        'is_active',
    ];

    public function offer(){
        return $this->belongsTo(Offer::class);
    }

}
