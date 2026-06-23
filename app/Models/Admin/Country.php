<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory, SoftDeletes;

    
    
    protected $fillable = [
        'title',
        'sort_by',
        'is_active',
    ];

     /**
     * Country has many Cities.
     */
    public function cities()
    {
        return $this->hasMany(City::class, 'country_id');
    }

}
