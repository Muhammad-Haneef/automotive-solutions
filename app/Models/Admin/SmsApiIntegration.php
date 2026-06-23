<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SmsApiIntegration extends Model
{
    /** @use HasFactory<\Database\Factories\SmsApiIntegrationFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sms_gateway_id',
        'api_user_name',
        'api_url',
        'api_key',
        'api_password',
        'mask',
        'is_default_gateway',
        'sort_by',
        'is_active',
    ];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            if ($model->is_default_gateway) {
                static::where('is_default_gateway', 1)
                    ->where('id', '!=', $model->id)
                    ->update(['is_default_gateway' => 0]);
            }
        });        
    }




    public function smsGateway()
    {
        return $this->belongsTo(SmsGateway::class);
    }


}
