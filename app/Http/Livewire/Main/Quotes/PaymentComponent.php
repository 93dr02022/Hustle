<?php

namespace App\Http\Livewire\Main\Quotes;

use App\Models\Quotation;
use App\Models\QuotationPayment;
use DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PaymentComponent extends Component
{
    public $quotation;
    public $expired = false;
    public $goToPay = false;
    public $inSelection = false;
    public $paymentMethod = 'paystack';

    public function mount($uid)
    {
        $this->quotation = Quotation::where('sharing_uid', $uid)
            ->with('items')
            ->first();

        // if($this->quotation->expire)
    }

    public function render()
    {
        return view('livewire.main.quotes.payment', [
            'commission' => settings('commission'),
        ])
            ->extends('livewire.main.layout.app')
            ->section('content');
    }

    /**
     * Begin processing After succussfull payment
     * 
     * @return mixed
     */
    public function checkout(String $reference)
    {
        if ($this->paymentMethod === 'paystack') {
            $response = $this->paystack($reference);

            DB::beginTransaction();
            try {
                $this->quotation->update(['paid' => true]);

                QuotationPayment::create([]);

                DB::commit();
            } catch (\Throwable $th) {
                DB::rollBack();
            }
        }
    }

    /**
     * check for paystack payment verification 
     *
     * @return array<string, mixed>
     */
    protected function paystack(String $referenceId)
    {
        try {
            $$total = $this->quotation->total;

            $payment = Http::withHeaders([
                'Authorization' => 'Bearer ' . config('paystack.secretKey'),
                'Accept' => 'application/json',
            ])
                ->get("https://api.paystack.co/transaction/verify/$referenceId")
                ->json();

            // Let's see if payment suuceeded
            if (
                is_array($payment) &&
                isset($payment['status']) &&
                $payment['status'] === true &&
                isset($payment['data'])
            ) {
                $amountPaid   = $payment['data']['amount'] / 100;

                // This amount must equals amount in order
                if ($amountPaid != $total) {
                    return [
                        'success'  => false,
                        'message'  => __('messages.t_amount_in_cart_not_equals_received')
                    ];
                }

                // Payment succeeded
                return [
                    'success'     => true,
                    'transaction' => [
                        'payment_id'     => $payment['data']['id'],
                        'payment_method' => 'paystack',
                        'payment_status' => 'paid'
                    ]
                ];
            } else {
                return  [
                    'success'  => false,
                    'message'  => __('messages.t_we_could_not_handle_ur_payment')
                ];
            }
        } catch (\Throwable $th) {
            return [
                'success'  => false,
                'message'  => $th->getMessage()
            ];
        }
    }
}
