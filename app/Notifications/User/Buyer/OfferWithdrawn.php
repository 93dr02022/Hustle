<?php

namespace App\Notifications\User\Buyer;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Kutia\Larafirebase\Facades\Larafirebase;

class OfferWithdrawn extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public $offer)
    {
        //
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
        // acceptance message
        $msg = 'Seller has withdrawn offer kindly reach out to seller for follow up';

        // if there is app token proceed
        if ($notifiable?->userNotificationSetting?->app_token) {
            rescue(fn () => $this->toMobile($notifiable, $msg));
        }

        // if there is web token proceed
        if ($notifiable?->userNotificationSetting?->notification_token) {
            rescue(fn () => $this->toFirebase($notifiable, $msg));
        }

        $subject = "[" . config('app.name') . "] " . __('Offer Decision');

        return (new MailMessage)
            ->subject($subject)
            ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
            ->line($msg)
            ->action(__('Follow up'), url("messages/new/{$this->offer->seller->username}"));
    }

    /**
     * Create the push notification.
     * its a must for seller to be notified that he has a new order
     *
     * @param  mixed  $notifiable
     */
    public function toFirebase($notifiable, $msg)
    {
        $subject = "[" . config('app.name') . "] " . __('Offer Decision');

        Larafirebase::withTitle($subject)
            ->withBody($msg)
            ->withClickAction("messages/new/{$this->offer->seller->username}")
            ->withIcon(asset('img/default/no-favicon.png'))
            ->withPriority('high')
            ->sendMessage([$notifiable->userNotificationSetting->notification_token]);
    }

    /**
     * Create the push notification to mobile.
     *
     * @param  mixed  $notifiable
     */
    public function toMobile($notifiable, $msg)
    {
        $subject = "[" . config('app.name') . "] " . __('Offer Decision');

        Larafirebase::withTitle($subject)
            ->withBody($msg)
            ->withIcon(asset('img/default/no-favicon.png'))
            ->withPriority('high')
            ->sendNotification([$notifiable->userNotificationSetting->app_token]);
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
