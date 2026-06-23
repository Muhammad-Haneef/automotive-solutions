<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class SystemUser extends Authenticatable
{
    protected $table = 'system_users';
    /** @use HasFactory<\Database\Factories\SystemUserFactory> */
    use HasFactory, SoftDeletes, Notifiable;

    protected $fillable = [
        'employee_id',
        'login_id',
        'password',
        'sort_by',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Relationship with SystemUserRole
     */
    public function role()
    {
        return $this->belongsTo(SystemUserRole::class, 'system_user_role_id');
    }

    /**
     * Check if the user is active
     */
    public function active()
    {
        return $this->active;
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'system_user_id');
    }

}
