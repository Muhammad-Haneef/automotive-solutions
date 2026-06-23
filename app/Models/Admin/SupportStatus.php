<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupportStatus extends Model
{
    /** @use HasFactory<\Database\Factories\SupportStatusFactory> */
    use HasFactory, SoftDeletes;

    
    protected $fillable = [
        'title',
        'description',
        'sort_by',
        'is_active',
    ];

    public function supports()
    {
        return $this->hasMany(Support::class, 'support_status_id');
    }

}
