<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddressBook extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\AddressBookFactory> */
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'title',
        'phone',
        'email',
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'country',
        'postal_code',
        'type',
        'is_default',
        'sort_by',
        'is_active',
    ];
}
