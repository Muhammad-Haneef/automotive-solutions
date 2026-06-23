<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Popup extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PopupFactory> */
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'title',
        'image',
        'display_pages',
        'link',
        'start_date',
        'end_date',
        'sort_by',
        'is_active',
    ];

    public function statistics()
    {
        return $this->hasMany(PopupStatistic::class);
    }
}
