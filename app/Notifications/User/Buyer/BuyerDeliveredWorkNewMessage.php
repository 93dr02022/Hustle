<?php

namespace App\Notifications\User\Buyer;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use Kutia\Larafirebase\Facades\Larafirebase;
use Kutia\Larafirebase\Messages\FirebaseMessage;

class BuyerDeliveredWorkNewMessage extends Notification implements ShouldQueue
{
    use Queueable;

    public $item;
    public $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($item, $message)
    {
        $this->item    = $item;
        $this->message = $message;
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
        // Set subject
        $subject = "[" . config('app.name') . "] " . __('messages.t_buyer_sent_u_message_about_delivered_files');

        return (new MailMessage)
                    ->subject($subject)
                    ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
                    ->line(__('messages.t_buyer_sent_u_message_about_delivered_files'))
                    ->action(__('messages.t_delivered_work'), url('seller/orders/deliver', $this->item->uid));
    }

    /**
     * Create the push notification.
     *
     * @param  mixed  $notifiable
     */
    public function toFirebase($notifiable)
    {
        if ($notifiable?->userNotificationSetting?->push_order_notifications) {
            // $subject = "[" . config('app.name') . "] " .'seller deliver order new message';
            $subject = "[" . config('app.name') . "] " . __('messages.t_buyer_sent_u_message_about_delivered_files');


            Larafirebase::withTitle($subject)
                ->withBody($this->message->msg_content)
                ->withClickAction(url('seller/orders/details', $this->item->uid))
                ->withIcon(asset('img/default/no-favicon.png'))
                ->withPriority('high')
                ->sendMessage([$notifiable->userNotificationSetting->notification_token]);
        }
    }

    /**
     * Create the push notification to mobile.
     *
     * @param  mixed  $notifiable
     */
    public function toMobile($notifiable)
    {
        if ($notifiable?->userNotificationSetting?->push_order_notifications) {
            $subject = "[" . config('app.name') . "] " . __('messages.t_subject_buyer_order_has_placed');

            Larafirebase::withTitle($subject)
                ->withBody(__('messages.t_notification_buyer_order_placed'))
                ->withIcon(asset('img/default/no-favicon.png'))
                ->withPriority('high')
                ->sendNotification([$notifiable->userNotificationSetting->app_token]);
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
