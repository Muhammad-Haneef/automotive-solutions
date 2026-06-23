<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SmsGateway extends Model
{
    /** @use HasFactory<\Database\Factories\SmsGatewayFactory> */
    use HasFactory, SoftDeletes;

    
    protected $fillable = [
        'title',
        'description',
        'sort_by',
        'is_active',
    ];

    
    public function smsApiIntegrations()
    {
        return $this->hasMany(SmsApiIntegration::class);
    }



}
