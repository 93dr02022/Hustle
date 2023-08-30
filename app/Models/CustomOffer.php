<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomOffer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<string, string>
     */
    protected $fillable = [
        'gig_id',
        'owner_id',
        'user_id',
        'uid',
        'description',
        'offer_amount',
        'delivery_time',
        'offer_status',
        'is_paid'
    ];

    /**
     * The attributes that should b casts
     * 
     * @var array<string, string>
     */
    protected $casts = [
        'is_paid' => 'boolean',
    ];

    /**
     * Get the offer owner
     */
    public function seller()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    /**
     * Get the offer owner
     */
    public function buyer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the offer gig service
     * 
     */
    public function gig()
    {
        return $this->belongsTo(Gig::class);
    }
}
