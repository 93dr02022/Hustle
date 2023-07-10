<?php

namespace App\Http\Controllers\Main\Notifications;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserNotificationSettings;

class NotificationsController extends Controller
{
    public function subscribe()
    {
        //Store the push notification token to the users table
        $userNotificationSettings = UserNotificationSettings::where(['user_id' => request()->user()->id])->first();
        if (!$userNotificationSettings) {
            UserNotificationSettings::create([
                'user_id' => request()->user()->id,
                'notification_token' => request('token')
            ]);
        }

        return response()->json(['message' => 'Subscribed!']);
    }

    public function unsubscribe()
    {
        request()
            ->user()
            ->update([
                'push_notification_id' => ''
            ]);

        return response()->json(['message' => 'Unsubscribed!']);
    }
}
