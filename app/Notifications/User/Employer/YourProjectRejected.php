<?php

namespace App\Notifications\User\Employer;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class YourProjectRejected extends Notification implements ShouldQueue
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
        // Set subject
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_employer_project_needs_changes');

        return (new MailMessage)
                    ->subject($subject)
                    ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
                    ->line(__('messages.t_notification_ur_project_has_been_rejected'))
                    ->line($this->project->title)
                    ->action(__('messages.t_view_project'), url('project/' . $this->project->pid . '/' . $this->project->slug));
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
