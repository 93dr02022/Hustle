<?php

namespace App\Notifications\User\Buyer;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Kutia\Larafirebase\Facades\Larafirebase;
use Kutia\Larafirebase\Messages\FirebaseMessage;

class OrderPlaced extends Notification implements ShouldQueue
{
    use Queueable;

    public $order;
    public $total;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order, $total)
    {
        $this->order = $order;
        $this->total = $total;
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
        // Set subject
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_buyer_order_has_placed');

        return (new MailMessage)
            ->subject($subject)
            ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
            ->line(__('messages.t_notification_buyer_order_placed'))
            ->action(__('messages.t_my_orders'), url('account/orders'));
    }
    /**
     * Create the push notification.
     *
     * @param  mixed  $notifiable
     * @return \NotificationChannels\OneSignal\OneSignalMessage
     */
    public function toFirebase($notifiable)
    {
        // Set subject
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_buyer_order_has_placed');
        $url =  url('account/orders');
        return  Larafirebase::withTitle($subject)
            ->withBody(__('messages.t_notification_buyer_order_placed'))
            ->withClickAction($url)
            ->withIcon(asset( 'img/default/no-favicon.png'))
            ->withImage(asset('img/default/no-favicon.png'))
            ->withPriority('high')
            ->sendMessage([$notifiable->userNotificationSetting->notification_token]);
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
    private function getActiveChannels($notifiable)
    {
        //Check if user has allowed push notifications for order updates
        if ($notifiable->userNotificationSetting->push_order_notifications) {
            $this->toFirebase($notifiable);
        }
        return ['mail'];
    }
}
