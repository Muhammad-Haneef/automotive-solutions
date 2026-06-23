<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DefaultSms extends Model
{
    /** @use HasFactory<\Database\Factories\DefaultSmsFactory> */
    use HasFactory, SoftDeletes;



    protected $fillable = [
        'sms_category_id',
        'title',
        'sms',
        'sort_by',
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(SMSCategory::class, 'sms_category_id');
    }
}
