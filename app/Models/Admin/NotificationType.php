<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotificationType extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\NotificationTypeFactory> */
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'title',
        'sort_by',
        'is_active',
    ];

    public function notifications()
{
    return $this->hasMany(Notification::class, 'notification_type_id');
}


}
