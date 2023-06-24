<?php

namespace App\Http\Controllers\Main\Notifications;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationsController extends Controller
{
    public function subscribe()
    {
        //Store the push notification token to the users table
        request()
            ->user()
            ->update([
                'push_notification_id' => request('token')
            ]);

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
