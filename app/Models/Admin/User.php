<?php

namespace App\Models\Admin;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */



    protected $fillable = [
        'name',
        'email',
        'contact',
        'password',
        'profile_picture',
        'dob',
        'gender',
        'remember_token',
        'email_verified_at',
        'phone_verified_at',
        'two_factor_enabled',
        'two_factor_secret',
        'account_status',
        'last_login_at',
        'last_login_ip',
        'login_device_info',
        'newsletter_subscription',
        'referral_code',
        'referred_by',
        'customer_notes',
        'sort_by',
        'is_active',
    ];

    protected $hidden = ['password', 'remember_token', 'two_factor_secret'];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'dob' => 'date',
        'two_factor_enabled' => 'boolean',
        'newsletter_subscription' => 'boolean',
        'last_login_at' => 'datetime',
    ];

    public function userGroup()
    {
        return $this->belongsTo(UserGroup::class, 'user_group_id');
    }

    public function referredBy()
    {
        return $this->belongsTo(User::class, 'referred_by');
    }

    public function referrals()
    {
        return $this->hasMany(User::class, 'referred_by');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function vendorOrders()
    {
        return $this->hasMany(Order::class, 'vendor_id');
    }

    public function confirmedOrders()
    {
        return $this->hasMany(Order::class, 'confirmed_by');
    }
    public function soldOrderItems()
    {
        return $this->hasMany(OrderItem::class, 'vendor_id');
    }
    public function statusChanges()
    {
        return $this->hasMany(OrderStatusLog::class, 'changed_by');
    }
    public function couponUsages()
    {
        return $this->hasMany(CouponUsage::class);
    }
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'user_id');
    }
    /**
     * User has many SMS messages.
     */
    public function smsMessages()
    {
        return $this->hasMany(Sms::class, 'user_id');
    }


    /**
     * A User has many Wallet Transactions.
     */
    public function transactions()
    {
        return $this->hasMany(WalletTransaction::class, 'user_id');
    }

    /**
     * A User has many Payout Requests.
     */
    public function payoutRequests()
    {
        return $this->hasMany(WalletPayoutRequest::class, 'user_id');
    }

    
    public function vendor()
    {
        return $this->hasOne(User::class);
    }


}
