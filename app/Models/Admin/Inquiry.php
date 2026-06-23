<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquiry extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\InquiryFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'contact',
        'message',
        'status',
        'handled_by',
        'sort_by',
        'is_active',
    ];

    public function handler()
    {
        return $this->belongsTo(SystemUser::class, 'handled_by');
    }

}
