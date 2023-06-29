<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'url',
        'title',
        'message',
        'number_of_users',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
