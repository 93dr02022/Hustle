<?php

namespace App\Notifications\User\Everyone;

use App\Models\Referral;
use App\Models\ReferralSetting;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use Kutia\Larafirebase\Facades\Larafirebase;

class ReferralCompleted extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public Referral $referral)
    {
        //
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
        // update referral status
        $setting = ReferralSetting::first();

        User::where('id', $notifiable->id)
            ->update([
                'referral_balance' => DB::raw("referral_balance + {$setting->referral_amount}")
            ]);

        $this->referral->completed = true;
        $this->referral->save();

        // if there is app token proceed
        if ($notifiable?->userNotificationSetting?->app_token) {
            rescue(fn () => $this->toMobile($notifiable));
        }

        // if there is web token proceed
        if ($notifiable?->userNotificationSetting?->notification_token) {
            rescue(fn () => $this->toFirebase($notifiable));
        }

        // Set subject
        $subject = "[" . config('app.name') . "] " . __('Referral Completed');

        return (new MailMessage)
            ->subject($subject)
            ->greeting(__('messages.t_hello_username', ['username' => $notifiable->username]))
            ->line('Referral Completed you have been awarded your referral bonus. Thank your for using correct hustle.')
            ->action('Referral', url("/account/referral"))
            ->line('Thank you for using correct hustle!');
    }

    /**
     * Create the push notification.
     *
     * @param  mixed  $notifiable
     */
    public function toFirebase($notifiable)
    {
        $subject = "[" . config('app.name') . "] " . __('Referral Completed');

        Larafirebase::withTitle($subject)
            ->withBody(__('Referral Completed you have been awarded your referral bonus. Thank your for using correct hustle.'))
            ->withClickAction('account/referral')
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
        $subject = "[" . config('app.name') . "] " . __('Referral Completed');

        Larafirebase::withTitle($subject)
            ->withBody(__('Referral Completed you have been awarded your referral bonus. Thank your for using correct hustle.'))
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
