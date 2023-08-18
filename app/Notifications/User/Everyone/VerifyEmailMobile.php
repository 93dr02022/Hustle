<?php

namespace App\Notifications\User\Everyone;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifyEmailMobile extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Verification
     *
     * @var object
     */
    public $verification;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($verification)
    {
        $this->verification = $verification;
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
        // Set subject
        $subject = "[" . config('app.name') . "] " . __('messages.t_subject_everyone_verify_ur_email');

        return (new MailMessage)
            ->subject($subject)
            ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
            ->line(__('Use the OTP code to complete your email verification, if you did not sign up for this account , please kindly ignore this message.'))
            ->line($this->verification->token)
            ->line('Thank you for choosing correct hustle!');
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
