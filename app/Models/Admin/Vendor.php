<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\VendorFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'payment_method_id',
        'logo',
        'title',
        'slug',
        'email',
        'description',
        'website',
        'address',
        'contact',
        'sort_by',
        'is_active',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
