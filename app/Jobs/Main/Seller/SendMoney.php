<?php

namespace App\Jobs\Main\Seller;

use App\Models\UserWithdrawalHistory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SendMoney implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public UserWithdrawalHistory $withdrawal)
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
        try {
            $response = Http::withToken(config('paystack.secretKey'))
                ->retry(3)
                ->post('https://api.paystack.co/transfer', [
                    "source" => "balance",
                    "amount" => floatval($this->withdrawal->amount) * 100,
                    "reference" => $this->withdrawal->uid,
                    "recipient" => $this->withdrawal->transfer_recipient,
                    "reason" => "Wallet Balance Withdrawal"
                ])
                ->object();

            if ($response->status) {
                $this->withdrawal->transfer_code = $response->data->transfer_code;
                $this->withdrawal->save();
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
