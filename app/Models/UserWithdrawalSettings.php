<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWithdrawalSettings extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_withdrawal_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'personal_acct_number',
        'personal_bank_name',
        'personal_account_name',
        'personal_bank_code',
        'personal_transfer_recipient',

        'business_acct_number',
        'business_bank_name',
        'business_account_name',
        'business_bank_code',
        'business_transfer_recipient',
    ];
}
