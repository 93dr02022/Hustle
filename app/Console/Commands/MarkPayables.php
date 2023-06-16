<?php

namespace App\Console\Commands;

use App\Models\OrderItem;
use App\Models\PaystackSettlement;
use App\Models\Quotation;
use Illuminate\Console\Command;

class MarkPayables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paystack:mark-payables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mark payable quotation and orders';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->markOrderItems();
        $this->markQuotations();
    }

    /**
     * Mark order items that can be payable
     */
    public function markOrderItems()
    {
        $items = OrderItem::select(
            'order_items.id',
            'order_items.can_wallet',
            'order_invoice.payment_id'
        )
            ->join('order_invoice', 'order_items.order_id', 'order_invoice.order_id')
            ->where('order_items.can_wallet', false)
            ->where('order_invoice.payment_method', 'paystack')
            ->where('order_invoice.status', 'paid')
            ->take(50)
            ->get();

        $items->each(function ($item) {
            $settled = PaystackSettlement::where('payment_id', $item->payment_id)
                ->whereStatus('success')
                ->exists();

            if ($settled) {
                $item->can_wallet = true;
                $item->save();
            }
        });
    }

    /**
     * Mark order items that can be payable
     */
    public function markQuotations()
    {
        $quotations = Quotation::select(
            'quotations.id',
            'quotations.can_wallet',
            'order_invoice.payment_id'
        )
            ->join('order_invoice', 'quotations.order_id', 'order_invoice.order_id')
            ->where('quotations.can_wallet', false)
            ->where('order_invoice.payment_method', 'paystack')
            ->where('order_invoice.status', 'paid')
            ->take(50)
            ->get();

        $quotations->each(function ($quotation) {
            $settled = PaystackSettlement::where('payment_id', $quotation->payment_id)
                ->whereStatus('success')
                ->exists();

            if ($settled) {
                $quotation->can_wallet = true;
                $quotation->save();
            }
        });
    }
}
