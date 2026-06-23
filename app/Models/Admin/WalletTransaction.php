<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class WalletTransaction extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\WalletTransactionFactory> */
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'wallet_id',
        'user_id',
        'transaction_type',
        'amount',
        'currency',
        'reference_id',
        'payment_method',
        'description',
        'status',
        'processed_at',
        'sort_by',
        'is_active',
    ];


    /**
     * A WalletTransaction belongs to a Wallet.
     */
    public function wallet()
    {
        return $this->belongsTo(Wallet::class, 'wallet_id');
    }

    /**
     * A WalletTransaction belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
