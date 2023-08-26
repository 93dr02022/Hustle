<?php

namespace App\Notifications\User\Everyone;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Kutia\Larafirebase\Facades\Larafirebase;
use Kutia\Larafirebase\Messages\FirebaseMessage;

class YourBidApproved extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public $bid){}

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
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_everyone_ur_bid_approved');

        return (new MailMessage)
                    ->subject($subject)
                    ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
                    ->line(__('messages.t_notification_ur_bid_has_been_approved'))
                    ->action(__('messages.t_submitted_proposals'), url('seller/projects/bids'));
    }
/**
     * Create the push notification.
     *
     * @param  mixed  $notifiable
     */
    public function toFirebase($notifiable)
    {
        if ($notifiable?->userNotificationSetting?->push_order_notifications) {
            $subject = "[" . config('app.name') . "] " . __('messages.t_subject_everyone_ur_bid_approved');

            Larafirebase::withTitle($subject)
                ->withBody(__('messages.t_notification_ur_bid_approved'))
                ->withClickAction('account/project')
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
            $subject = "[" . config('app.name') . "] " . __('messages.t_subject_everyone_ur_bid_approved');

            Larafirebase::withTitle($subject)
                ->withBody(__('messages.t_notification_ur_bid_approved'))
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
