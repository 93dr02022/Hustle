<?php

namespace App\Notifications\User\Seller;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Kutia\Larafirebase\Facades\Larafirebase;

class PendingOrder extends Notification implements ShouldQueue
{
    use Queueable;

    public $item;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($item)
    {
        $this->item = $item;
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

        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_seller_pending_order');

        return (new MailMessage)
            ->subject($subject)
            ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
            ->line(__('messages.t_notification_seller_line_1_pending_order'))
            ->action(__('messages.t_order_details'), url('seller/orders/details', $this->item->uid));
    }

    /**
     * Create the push notification.
     * its a must for seller to be notified that he has a new order
     *
     * @param  mixed  $notifiable
     */
    public function toFirebase($notifiable)
    {
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_seller_pending_order');

        Larafirebase::withTitle($subject)
            ->withBody(__('You just received a new order, check your dashboard to see order details'))
            ->withClickAction('seller/orders/details' . $this->item->uid)
            ->withIcon(asset('img/default/no-favicon.png'))
            ->withPriority('high')
            ->sendMessage([$notifiable->userNotificationSetting->notification_token]);
    }

    /**
     * Create the push notification to mobile.
     *
     * @param  mixed  $notifiable
     */
    public function toMobile($notifiable)
    {
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_seller_pending_order');

        Larafirebase::withTitle($subject)
            ->withBody(__('You just received a new order, check your dashboard to see order details'))
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
