<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     * 
     * @var array<string, string>
     */
    protected $fillable = [
        'user_id',
        'referred_id',
        'completed',
        'referral_code',
    ];

    /**
     * Get the referrer
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
