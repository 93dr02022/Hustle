<?php

namespace App\Notifications\User\Everyone;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Kutia\Larafirebase\Facades\Larafirebase;
use Kutia\Larafirebase\Messages\FirebaseMessage;
class NewBidReceived extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public $bid, public $project){}

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
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_everyone_u_received_new_bid');

        return (new MailMessage)
                    ->subject($subject)
                    ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
                    ->line(__('messages.t_notification_u_have_received_a_new_bid'))
                    ->line($this->project->title)
                    ->action(__('messages.t_view_project'), url('project/' . $this->project->pid . '/' . $this->project->slug));
    }
    /**
     * Create the push notification.
     *
     * @param  mixed  $notifiable
     */
    public function toFirebase($notifiable)
    {

             $subject = "[" . config('app.name') . "] " . __('messages.t_subject_everyone_u_received_new_bid');


            Larafirebase::withTitle($subject)
                ->withBody('You received a new bid')
                ->withClickAction('account/project')
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


            $subject = "[" . config('app.name') . "] " . __('messages.t_subject_everyone_u_received_new_bid');

            Larafirebase::withTitle($subject)
                ->withBody('You received a new bid')
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
