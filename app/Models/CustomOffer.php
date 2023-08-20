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
    protected $fillable = [];

    /**
     * Get the offer gig service
     * 
     */
    public function gig()
    {
        return $this->belongsTo(Gig::class)
    }
}
