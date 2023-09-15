<?php

namespace App\Notifications\User\Seller;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Kutia\Larafirebase\Facades\Larafirebase;
class ReviewReceived extends Notification implements ShouldQueue
{
    use Queueable;

    public $item;
    public $review;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($item, $review)
    {
        $this->item   = $item;
        $this->review = $review;
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
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_seller_new_review');

        return (new MailMessage)
                    ->subject($subject)
                    ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
                    ->line(__('messages.t_notification_seller_line_1_review_received'))
                    ->action(__('messages.t_reviews'), url('seller/reviews/details', $this->review->uid));
    }
  
     /**
     * Create the push notification.
     * its a must for seller to be notified that he has Recieved a Review
     *
     * @param  mixed  $notifiable
     */
    public function toFirebase($notifiable)
    {
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_seller_new_review');


        Larafirebase::withTitle($subject)
            ->withBody(__('You just received a new review, check your dashboard to see Review details'))
            ->withClickAction('seller/reviews/details' . $this->review->uid)
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
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_seller_new_review');

        Larafirebase::withTitle($subject)
            ->withBody(__('You just received a new review, check your dashboard to see Review details'))
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
