<?php

namespace App\Jobs\Paystack;

use App\Models\UserWithdrawalHistory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Transfer implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public array $payload, public string $eventType)
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
        switch ($this->eventType) {
            case 'transfer.success':
                $this->success();
                break;

            case 'transfer.reversed':
                $this->reversed();
                break;

            case 'transfer.failed':
                $this->failed();
                break;

            default:
                # code...
                break;
        }
    }

    /**
     * Tranfer successful.
     */
    public function success()
    {
        $payload = $this->payload;

        $history = UserWithdrawalHistory::where('uid', $payload['reference'])
            ->where('transfer_recipient', $payload['recipient']['recipient_code'])
            ->first();

        $history->status = 'paid';
        $history->paid_at = now();
        $history->save();
    }

    /**
     * Tranfer successful.
     */
    public function reversed()
    {
        $payload = $this->payload;

        $history = UserWithdrawalHistory::where('uid', $payload['reference'])
            ->where('transfer_recipient', $payload['recipient']['recipient_code'])
            ->first();

        $history->status = 'declined';
        $history->reversed_at = now();
        $history->save();
    }

    /**
     * Tranfer successful.
     */
    public function failed()
    {
        $payload = $this->payload;

        $history = UserWithdrawalHistory::where('uid', $payload['reference'])
            ->where('transfer_recipient', $payload['recipient']['recipient_code'])
            ->first();

        $history->status = 'declined';
        $history->failed_at = now();
        $history->save();
    }
}
