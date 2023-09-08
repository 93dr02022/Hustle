<?php

namespace App\Jobs\Main\General;

use App\Models\Referral;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Referred implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public string $code, public User $user)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $referrer = User::where('referral_code', $this->code)->first();

        if ($referrer) {
            Referral::create([
                'user_id' => $referrer->id,
                'referred_id' => $this->user->id,
                'completed' => false,
                'referral_code' => $this->code,
            ]);
        }
    }
}
