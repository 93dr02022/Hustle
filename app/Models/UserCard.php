<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCard extends Model
{
    use HasFactory;

    /**
     * The attributes  that are mass assignable
     * 
     * @var array<string, string>
     */
    protected $fillable = [
        'user_id',
        'authorization_code',
        'email',
        'card_type',
        'exp_month',
        'exp_year',
        'bin',
        'last',
        'bank',
    ];

    /**
     * Get the user this card belongs to
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
