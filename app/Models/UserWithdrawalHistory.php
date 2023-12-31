<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWithdrawalHistory extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_withdrawal_history';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid',
        'user_id',
        'account_type',
        'account_number',
        'amount',
        'transfer_recipient',
        'transfer_code',
        'status',
        'paid_at',
        'failed_at',
        'reversed_at'
    ];


    /**
     * Get user
     *
     * @return object
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
    }

    /**
     * Scope to auth user latest paid
     */
    public function scopeUserLatestPaid(Builder $query): Builder
    {
        return $query->where('user_id', auth()->id())
            ->where('status', 'paid')
            ->latest();
    }

    /**
     * Scope to auth user latest paid
     */
    public function scopeUserPending(Builder $query): Builder
    {
        return $query->where('user_id', auth()->id())
            ->where('status', 'pending');
    }
}
