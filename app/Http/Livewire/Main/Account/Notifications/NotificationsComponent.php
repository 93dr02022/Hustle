<?php

namespace App\Http\Livewire\Main\Account\Notifications;

use App\Models\User;
use App\Models\UserNotificationSettings;
use Livewire\Component;
use WireUi\Traits\Actions;

class NotificationsComponent extends Component
{
    use Actions;

    public $push_inbox_notifications;
    public $push_order_notifications;
    public $push_marketing_notifications;

    public $userNotificationSettings;

    function mount()
    {
        $userNotificationSettings = UserNotificationSettings::firstOrCreate(
            ['user_id' => auth()->id()],
            [
                'notification_token' => '',
                'push_inbox_notifications' => false,
                'push_order_notifications' => false,
                'push_marketing_notifications' => false,
            ]
        );

        $this->userNotificationSettings = $userNotificationSettings;

        // Fill user notification setting form
        $this->fill([
            'push_inbox_notifications' => $userNotificationSettings->push_inbox_notifications,
            'push_order_notifications' => $userNotificationSettings->push_order_notifications,
            'push_marketing_notifications' => $userNotificationSettings->push_marketing_notifications
        ]);
    }

    public function render()
    {
        return view('livewire.main.account.notifications.notifications-component')
            ->extends('livewire.main.layout.app');
    }

    /**
     * update user notification settings
     * 
     */
    public function updateNotificationPreference()
    {
        try {
            $this->userNotificationSettings->update([
                'push_inbox_notifications' => $this->push_inbox_notifications,
                'push_order_notifications' => $this->push_order_notifications,
                'push_marketing_notifications' => $this->push_marketing_notifications
            ]);

            $this->toastMessage('notification settings updated successfully.', 'success');
            $this->userNotificationSettings->refresh();
        } catch (\Throwable $th) {
            $this->toastMessage('Error occurred while updating notification settings.');
        }
    }

    /**
     * update user email notification settings
     * 
     */
    public function updateEmailNotificationPreference()
    {
        //
    }

    /**
     * Wire UI Error toast notification
     */
    public function toastMessage($message, $type = 'error')
    {
        $this->notification([
            'title' => $type == 'error' ? __('messages.t_error') : __('messages.t_success'),
            'description' => $message,
            'icon' =>  $type,
        ]);
    }
}
