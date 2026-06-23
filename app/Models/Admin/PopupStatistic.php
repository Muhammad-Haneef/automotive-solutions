<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PopupStatistic extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PopupStatisticFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'popup_id',
        'views',
        'clicks',
        'coversion_rate',
        'sort_by',
        'is_active',
    ];


    public function popup()
    {
        return $this->belongsTo(Popup::class);
    }
}
