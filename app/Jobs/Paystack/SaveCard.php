<?php

namespace App\Jobs\Paystack;

use App\Models\UserCard;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SaveCard implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public array $payload)
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
        if (!is_array($this->payload['metadata'])) {
            return true;
        }

        if (
            array_key_exists('userId', $this->payload['metadata']) &&
            $this->payload['authorization']['channel'] == 'card' &&
            $this->payload['authorization']['reusable'] == true
        ) {
            $auth = $this->payload['authorization'];

            UserCard::updateOrCreate(
                ['user_id' => $this->payload['metadata']['userId']],
                [
                    'authorization_code' => $auth['authorization_code'],
                    'email' => $this->payload['customer']['email'],
                    'card_type' => $auth['brand'],
                    'exp_month' => $auth['exp_month'],
                    'exp_year' => $auth['exp_year'],
                    'bin' => $auth['bin'],
                    'last' => $auth['last4'],
                    'bank' => $auth['bank'],
                ]
            );
        }
    }
}
