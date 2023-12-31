<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     * 
     * @todo change paystack marking payable to 6 hrs
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('sitemap:generate')->everyMinute();
        $schedule->command('paystack:mark-payables')->everyMinute();
        $schedule->command('orders:complete')->everyThirtyMinutes();
        $schedule->command('sellers:unavailable')->daily();
        $schedule->command('expired:bids')->daily();
        $schedule->command('expired:projects')->daily();
        $schedule->command('refresh:cache')->everyThirtyMinutes();
        $schedule->command('tmp:clean')->everySixHours();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
