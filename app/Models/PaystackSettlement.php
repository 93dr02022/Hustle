<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaystackSettlement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assigneable.
     * 
     * @var array<string, string>
     */
    protected $fillable = [
        'payment_id',
        'status',
        'amount',
        'reference',
        'paid_at',
        'currency',
        'gateway_response'
    ];
}
