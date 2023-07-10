<?php

namespace App\Http\Livewire\Main\Account\Notifications;

use App\Models\User;
use App\Models\UserNotificationSettings;
use Livewire\Component;

class NotificationsComponent extends Component
{
    public $push_inbox_notifications;
    public $push_order_notifications;
    public $push_marketing_notifications;

    function mount()
    {
        $user = auth()->user();
        $userNotificationSettings = UserNotificationSettings::where('user_id',$user->id)->first();
        // Fill user notification setting form
        $this->fill([
            'push_inbox_notifications' => $userNotificationSettings->push_inbox_notifications,
            'push_order_notifications' => $userNotificationSettings->push_order_notifications,
            'push_marketing_notifications' => $userNotificationSettings->push_marketing_notifications
        ]);
    }
    public function render()
    {
        return view('livewire.main.account.notifications.notifications-component')->extends('livewire.main.layout.app');
    }
    public function updateNotificationPreference()
    {
        $userNotificationSettings = UserNotificationSettings::where(['user_id'=> auth()->id()])->first();
        if($userNotificationSettings){
            $userNotificationSettings->update([
                'push_inbox_notifications' => $this->push_inbox_notifications,
                'push_order_notifications' => $this->push_order_notifications,
                'push_marketing_notifications' => $this->push_marketing_notifications
            ]);
        }else{
            UserNotificationSettings::create([
                'user_id'=>auth()->id(),
                'push_inbox_notifications' => $this->push_inbox_notifications,
                'push_order_notifications' => $this->push_order_notifications,
                'push_marketing_notifications' => $this->push_marketing_notifications
            ]);
        }
    }

    public function updateEmailNotificationPreference()
    {
        //
    }
}
