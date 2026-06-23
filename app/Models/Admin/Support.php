<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Support extends Model
{
    /** @use HasFactory<\Database\Factories\SupportFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'support_type_id',
        'support_status_id',
        'order_id',
        'code',
        'name',
        'email',
        'contact',
        'subject',
        'message',
        'callback_at',
        'sort_by',
        'is_active',
    ];

    /**
     * Relationship: Support belongs to a SupportType.
     */
    public function supportType()
    {
        return $this->belongsTo(SupportType::class, 'support_type_id');
    }

    /**
     * Relationship: Support belongs to a SupportStatus.
     */
    public function supportStatus()
    {
        return $this->belongsTo(SupportStatus::class, 'support_status_id');
    }

    /**
     * Relationship: Support may belong to an Order.
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    /**
     * Relationship: Support has many Comments.
     */
    public function comments()
    {
        return $this->hasMany(SupportComment::class, 'support_id');
    }
}
