<?php

namespace App\Notifications\User;

use App\Models\MarketingNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Kutia\Larafirebase\Facades\Larafirebase;

class Marketing extends Notification
{
    use Queueable;
    public $marketingNotification;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(MarketingNotification $marketingNotification)
    {
        $this->marketingNotification = $marketingNotification;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        //Get the notification channels that the user has allowed to be notified of.
        return $this->getActiveChannels($notifiable);
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject($this->marketingNotification->title)
            ->line($this->marketingNotification->message)
            ->action('Read More', $this->marketingNotification->url)
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
    public function toFirebase($notifiable)
    {

        return  Larafirebase::withTitle($this->marketingNotification->title)
            ->withBody($this->marketingNotification->message)
            ->withClickAction($this->marketingNotification->url)
            ->withIcon(asset('img/default/no-favicon.png'))
            ->withImage(asset('img/default/no-favicon.png'))
            ->withPriority('high')
            ->sendMessage([$notifiable->userNotificationSetting->notification_token]);
    }

    private function getActiveChannels($notifiable)
    {
        //Check if user has allowed push notifications for order updates
        if ($notifiable->userNotificationSetting->push_order_notifications) {
            $this->toFirebase($notifiable);
        }
        return [];
    }
}
