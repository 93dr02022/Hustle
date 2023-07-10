<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotificationSettings extends Model
{
    use HasFactory;
    protected $fillable = [
        'notification_token',
        'user_id',
        'push_inbox_notifications',
        'push_order_notifications',
        'push_marketing_notifications'
    ];
    protected $casting = [
        'push_inbox_notifications' => 'boolean',
        'push_order_notifications' => 'boolean',
        'push_marketing_notifications' => 'boolean'
    ];
}
