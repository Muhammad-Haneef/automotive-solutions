<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends Model
{
    /** @use HasFactory<\Database\Factories\WalletFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'wallet_key',
        'user_id',
        'balance',
        'currency',
        'status',
        'sort_by',
        'is_active',
    ];
    
  
     /**
     * A Wallet belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * A Wallet has many Transactions.
     */
    public function transactions()
    {
        return $this->hasMany(WalletTransaction::class, 'wallet_id');
    }

    /**
     * A Wallet has many Payout Requests.
     */
    public function payoutRequests()
    {
        return $this->hasMany(WalletPayoutRequest::class, 'wallet_id');
    }

}
