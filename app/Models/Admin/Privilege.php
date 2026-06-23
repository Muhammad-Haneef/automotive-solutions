<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Privilege extends Model
{
    /** @use HasFactory<\Database\Factories\PrivilegeFactory> */
    use HasFactory, SoftDeletes;
   
    protected $fillable = [
        'title',
        'slug',
        'sort_by',
        'is_active',
    ];

    public function group()
    {
        return $this->belongsTo(PrivilegeGroup::class, 'privilege_group_id');
    }

    /**
     * A Privilege belongs to many Roles through system_user_role_privileges.
     */
    public function roles()
    {
        return $this->belongsToMany(SystemUserRole::class, 'system_user_role_privileges', 'privilege_id', 'system_user_role_id');
    }


}
