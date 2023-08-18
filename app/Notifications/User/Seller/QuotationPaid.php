<?php

namespace App\Notifications\User\Seller;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Kutia\Larafirebase\Facades\Larafirebase;

class QuotationPaid extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public $quotation)
    {
        $this->afterCommit();
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
        $subject = "[" . config('app.name') . "] " . __('Quotation payment');

        return (new MailMessage)
            ->subject($subject)
            ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
            ->line('You just received a new quote payment, click button below to see quote details')
            ->action('Quote', url("/seller/quotations"))
            ->line('Thank you for using our application!');
    }

    /**
     * Create the push notification.
     *
     * @param  mixed  $notifiable
     */
    public function toFirebase($notifiable)
    {
        if ($notifiable?->userNotificationSetting?->push_order_notifications) {
            $subject = "[" . config('app.name') . "] " . __('Quotation payment');

            Larafirebase::withTitle($subject)
                ->withBody(__('Your quotation payment has been made by the user please check your dashboard to see payment details.'))
                ->withClickAction('seller/quotations"')
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
            $subject = "[" . config('app.name') . "] " . __('Quotation payment');

            Larafirebase::withTitle($subject)
                ->withBody(__('Your quotation payment has been made by the user please check your dashboard to see payment details.'))
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
