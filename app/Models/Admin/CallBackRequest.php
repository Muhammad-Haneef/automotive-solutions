<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CallBackRequest extends Model
{
    /** @use HasFactory<\Database\Factories\CallBackRequestFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'contact',
        'message',
        'status_id',
        'handled_by',
        'sort_by',
        'is_active',
    ];

    public function handler()
    {
        return $this->belongsTo(SystemUser::class, 'handled_by');
    }

    // Accessor for status label

    public function getStatusLabel()
    {
        $statuses = getCallbackStatus();
        $status = collect($statuses)
            ->map(fn($item) => (object) $item)
            ->firstWhere('id', $this->status_id);
        return $status->title ?? 'Unknown';
    }
}
