<?php

namespace App\Jobs\Main\Notifications;

use App\Models\MarketingNotification;
use App\Models\User;
use App\Notifications\User\Marketing;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMarketingNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $marketingNotification;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(MarketingNotification $marketingNotification)
    {
        $this->marketingNotification = $marketingNotification;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $usersToNotify = User::whereHas('userNotificationSetting', function ($query) {
            $query->where('push_marketing_notifications', true);
        })->get();

        foreach ($usersToNotify as $user) {
            $user->notify(new Marketing($this->marketingNotification));
        }
    }
}
