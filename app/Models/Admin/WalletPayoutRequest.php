<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class WalletPayoutRequest extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\WalletPayoutRequestFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'wallet_id',
        'amount',
        'currency',
        'payment_method',
        'status',  //  ['pending', 'approved', 'rejected', 'paid']
        'admin_notes',
        'processed_at',
        'sort_by',
        'is_active',
    ];
       /**
     * A Payout Request belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * A Payout Request belongs to a Wallet.
     */
    public function wallet()
    {
        return $this->belongsTo(Wallet::class, 'wallet_id');
    }

}
