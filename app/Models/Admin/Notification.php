<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    /** @use HasFactory<\Database\Factories\NotificationFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'notification_type_id',
        'user_id',
        'system_user_id',
        'title',
        'message',
        'is_read',
        'sort_by',
        'is_active',
    ];

    // Relationship with NotificationType
    public function type()
    {
        return $this->belongsTo(NotificationType::class, 'notification_type_id');
    }

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship with SystemUser
    public function systemUser()
    {
        return $this->belongsTo(SystemUser::class, 'system_user_id');
    }

}
