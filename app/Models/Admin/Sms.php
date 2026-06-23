<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sms extends Model
{
    /** @use HasFactory<\Database\Factories\SmsFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sms_category_id',
        'user_id',
        'message',
        'recipient_number',
        'response',
        'order_number',
        'status',
        'sort_by',
        'is_active',
    ];

    /**
     * SMS belongs to an SMS category.
     */
    public function smsCategory()
    {
        return $this->belongsTo(SmsCategory::class, 'sms_category_id');
    }

    /**
     * SMS belongs to a User (if applicable).
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
