<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteSetting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     * 
     * @var array<string, string
     */
    protected $fillable = [
        'user_id',
        'logo',
        'business_name',
        'contact',
        'email',
        'address'
    ];
}
