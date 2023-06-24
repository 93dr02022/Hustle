<?php

namespace App\Http\Livewire\Main\Account\Notifications;

use App\Models\User;
use Livewire\Component;

class NotificationsComponent extends Component
{
    public $push_order_updates;
    public $push_inbox_messages;

    function mount()
    {
        $user = auth()->user();

        // Fill form
        $this->fill([
            'push_order_updates' => $user->push_order_updates,
            'push_inbox_messages' => $user->push_inbox_messages,
        ]);
    }
    public function render()
    {
        return view('livewire.main.account.notifications.notifications-component')->extends('livewire.main.layout.app');
    }
    public function updateNotificationPreference()
    {
        $user = User::find(auth()->id());
        $user->push_order_updates = $this->push_order_updates;
        $user->push_inbox_messages = $this->push_inbox_messages;
        $user->save();
    }

    public function updateEmailNotificationPreference()
    {
        //
    }
}
