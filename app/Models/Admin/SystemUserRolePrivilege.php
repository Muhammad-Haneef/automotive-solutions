<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemUserRolePrivilege extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\SystemUserRolePrivilegeFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'system_user_role_id',
        'privilege_id',
        'sort_by',
        'is_active',
    ];

/**
     * Belongs to a System User Role.
     */
    public function role()
    {
        return $this->belongsTo(SystemUserRole::class, 'system_user_role_id');
    }

    /**
     * Belongs to a Privilege.
     */
    public function privilege()
    {
        return $this->belongsTo(Privilege::class, 'privilege_id');
    }

}
