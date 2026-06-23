<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupportComment extends Model
{
    /** @use HasFactory<\Database\Factories\SupportCommentFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'support_id',
        'comments',
        'sort_by',
        'is_active',
    ];

    public function support()
    {
        return $this->belongsTo(Support::class, 'support_id');
    }
}
