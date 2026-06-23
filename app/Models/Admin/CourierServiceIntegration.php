<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourierServiceIntegration extends Model
{
    /** @use HasFactory<\Database\Factories\CourierServiceIntegrationFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'courier_service_id',
        'api_user_name',
        'api_key',
        'api_url',
        'tracking_url',
        'sort_by',
        'is_active',
    ];


    public function courierService()
    {
        return $this->belongsTo(CourierService::class);
    }
}
