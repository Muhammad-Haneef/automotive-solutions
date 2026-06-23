<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserGroup extends Model
{
    /** @use HasFactory<\Database\Factories\UserGroupFactory> */
    use HasFactory, SoftDeletes;

    
    protected $fillable = [
        'title',
        'description',
        'sort_by',
        'is_active',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_group_id');
    }

}
