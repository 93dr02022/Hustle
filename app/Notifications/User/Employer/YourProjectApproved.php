<?php

namespace App\Notifications\User\Employer;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Kutia\Larafirebase\Facades\Larafirebase;
use Kutia\Larafirebase\Messages\FirebaseMessage;


class YourProjectApproved extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public $project){}

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
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_employer_project_approved');

        return (new MailMessage)
                    ->subject($subject)
                    ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
                    ->line(__('messages.t_notification_ur_project_has_been_approved'))
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

            $subject = "[" . config('app.name') . "] " . __('messages.t_subject_employer_project_approved');

            Larafirebase::withTitle($subject)
                ->withBody(__('messages.t_notification_ur_project_has_been_approved'))
                ->withClickAction('project/' . $this->project->pid . '/' . $this->project->slug)
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

            $subject = "[" . config('app.name') . "] " . __('messages.t_subject_employer_project_approved');

            Larafirebase::withTitle($subject)
                ->withBody(__('messages.t_notification_ur_project_has_been_approved'))
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
