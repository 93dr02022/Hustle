<?php

namespace App\Http\Livewire\Main\Quotes;

use App\Models\Order;
use App\Models\OrderInvoice;
use App\Models\Quotation;
use App\Models\QuotationPayment;
use App\Notifications\User\Seller\QuotationPaid;
use DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use WireUi\Traits\Actions;

class PaymentComponent extends Component
{
    use Actions;

    public $quotation;

    public $expired = false;

    public $goToPay = false;

    public $inSelection = false;

    public $paymentMethod = 'paystack';

    public $payHasError = false;

    public $payCompleted = false;

    public $toPay = 0;

    public function mount($uid)
    {
        $this->quotation = Quotation::where('reference', $uid)
            ->with('items')
            ->first();

        if ($this->quotation?->expires_at?->isPast()) {
            $this->quotation = null;
        }

        if ($this->quotation?->paid) {
            $this->quotation = null;
        }

        if ($this->quotation !== null) {
            $this->toPay = $this->quotation->total + $this->quotation->total_tax;
        }
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
     * also check if auth user thats making payment is not
     * the quote seller in other to attach invoice to buyer
     *
     * @return mixed
     */
    public function checkout(string $reference)
    {
        if ($this->paymentMethod === 'paystack') {

            $response = $this->paystack($reference);

            if (!$response['success']) {
                $this->toastError($response['message']);

                return;
            }

            DB::beginTransaction();
            try {
                $this->quotation->update(['paid' => true]);

                OrderInvoice::create([
                    'order_id' => $this->quotation->order_id,
                    'payment_method' => $this->paymentMethod,
                    'payment_id' => $response['transaction']['payment_id'],
                    'amount_paid' => $response['transaction']['amount_paid'],
                    'firstname' => $this->quotation->first_name,
                    'lastname' => $this->quotation->last_name,
                    'email' => $this->quotation->email,
                    'status' => 'paid'
                ]);

                if (auth()->check() && $this->quotation->user_id !== auth()->id()) {
                    Order::where('id', $this->quotation->order_id)
                        ->update(['buyer_id' => auth()->id()]);
                }

                // Seller new Available Balance
                $this->quotation->owner()
                ->update([
                    'balance_available' => $this->quotation->owner->balance_available + $this->quotation->profit_value
                ]);

                $this->quotation->owner
                    ->notify((new QuotationPaid($this->quotation))
                        ->locale(config('app.locale')));

                DB::commit();

                $this->toastSuccess('Payment Completed successfully.');

                return redirect()->to('/');
            } catch (\Throwable $th) {
                DB::rollBack();

                $this->payHasError = true;
                $this->toastError('Oops sorry error occured while trying to process your payment.');
            }
        }
    }

    /**
     * Set toast notification error message
     */
    public function toastError($message)
    {
        $this->notification([
            'title' => 'Payment Failed',
            'description' => $message,
            'icon' => 'error',
        ]);
    }

    /**
     * Set toast notification error message
     */
    public function toastSuccess($message)
    {
        $this->notification([
            'title' => 'Payment Completed',
            'description' => $message,
            'icon' => 'success',
        ]);
    }

    /**
     * check for paystack payment verification
     *
     * @return array<string, mixed>
     */
    protected function paystack(string $referenceId)
    {
        try {
            $payment = Http::withHeaders([
                'Authorization' => 'Bearer ' . config('paystack.secretKey'),
                'Accept' => 'application/json',
            ])
                ->get("https://api.paystack.co/transaction/verify/$referenceId")
                ->object();

            // Let's see if payment suuceeded
            if ($payment?->data?->status === 'success') {
                $amountPaid = $payment->data->amount / 100;

                // This amount must equals amount in order
                if ($amountPaid != $this->toPay) {
                    return [
                        'success' => false,
                        'message' => __('messages.t_amount_in_cart_not_equals_received'),
                    ];
                }

                // Payment succeeded
                return [
                    'success' => true,
                    'transaction' => [
                        'payment_id' => $payment->data->id,
                        'payment_method' => 'paystack',
                        'amount_paid' => $amountPaid,
                    ],
                ];
            } else {
                return [
                    'success' => false,
                    'message' => __('messages.t_we_could_not_handle_ur_payment'),
                ];
            }
        } catch (\Throwable $th) {
            return [
                'success' => false,
                'message' => $th->getMessage(),
            ];
        }
    }
}
