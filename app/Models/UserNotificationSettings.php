<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotificationSettings extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     * 
     * @var array<string, string>
     */
    protected $fillable = [
        'notification_token',
        'app_token',
        'user_id',
        'push_inbox_notifications',
        'push_order_notifications',
        'push_marketing_notifications'
    ];

    /**
     * The attributes that should be cast
     * 
     * @var array<string, string>
     */
    protected $casts = [
        'push_inbox_notifications' => 'boolean',
        'push_order_notifications' => 'boolean',
        'push_marketing_notifications' => 'boolean'
    ];
}
