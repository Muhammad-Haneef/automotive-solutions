<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SmsCategory extends Model
{
    /** @use HasFactory<\Database\Factories\SmsCategoryFactory> */
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'title',
        'description',
        'sort_by',
        'is_active',
    ];

    // Relationship with Sms model
    public function smsMessages()
    {
        return $this->hasMany(Sms::class);
    }

    // Relationship with DefaultSMS model
    public function defaultMessages()
    {
        return $this->hasMany(DefaultSMS::class, 'sms_category_id');
    }
}
