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
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // if there is app token proceed
        if ($notifiable?->userNotificationSetting?->app_token) {
            rescue(fn () => $this->toMobile($notifiable));
        }

        // if there is web token proceed
        if ($notifiable?->userNotificationSetting?->notification_token) {
            rescue(fn () => $this->toFirebase($notifiable));
        }

        return (new MailMessage)
            ->subject($this->marketingNotification->title)
            ->line($this->marketingNotification->message)
            ->action('Read More', $this->marketingNotification->url)
            ->line('Thank you for using our application!');
    }

    /**
     * Create the push notification to mobile.
     *
     * @param  mixed  $notifiable
     */
    public function toMobile($notifiable)
    {
        if ($notifiable?->userNotificationSetting?->push_order_notifications) {
            Larafirebase::withTitle($this->marketingNotification->title)
                ->withBody($this->marketingNotification->message)
                ->withIcon(asset('img/default/no-favicon.png'))
                ->withPriority('high')
                ->sendNotification([$notifiable->userNotificationSetting->app_token]);
        }
    }

    /**
     * Create the push notification.
     *
     * @param  mixed  $notifiable
     */
    public function toFirebase($notifiable)
    {
        if ($notifiable?->userNotificationSetting?->push_order_notifications) {
            Larafirebase::withTitle($this->marketingNotification->title)
                ->withBody($this->marketingNotification->message)
                ->withClickAction($this->marketingNotification->url)
                ->withIcon(asset('img/default/no-favicon.png'))
                ->withPriority('high')
                ->sendMessage([$notifiable->userNotificationSetting->notification_token]);
        }
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
}
