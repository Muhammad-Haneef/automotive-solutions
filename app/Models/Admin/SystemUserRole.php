<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemUserRole extends Model
{
    /** @use HasFactory<\Database\Factories\SystemUserRoleFactory> */
    use HasFactory, SoftDeletes;

    
    protected $fillable = [
        'title',
        'description',
        'sort_by',
        'is_active',
    ];

    public function users()
    {
        return $this->hasMany(SystemUser::class, 'system_user_role_id');
    }

    /**
     * A Role has many Privileges through system_user_role_privileges.
     */
    public function privileges()
    {
        return $this->belongsToMany(Privilege::class, 'system_user_role_privileges', 'system_user_role_id', 'privilege_id');
    }

}
