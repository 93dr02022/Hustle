<?php

namespace App\Console\Commands;

use App\Models\OrderItem;
use App\Models\Quotation;
use App\Models\User;
use Illuminate\Console\Command;

class ProcessWallet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:complete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Complete incompleted order items';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->completeOrder();
        $this->completeQuotation();
    }

    /**
     * complete order and fund seller amount a
     * nd reduce seller pending balance
     */
    public function completeOrder()
    {
        $items = OrderItem::where('status', 'delivered')
            ->where('is_finished', false)
            ->whereNotNull('delivered_at')
            ->where('can_wallet', true)
            ->whereDoesntHave('refund', function ($query) {
                return $query->where('status', '!=', 'pending');
            })
            ->get();

        $items->each(function ($item) {
            User::where('id', $item->owner_id)->update([
                'balance_pending' => $item->owner->balance_pending - $item->profit_value,
                'balance_available' => $item->owner->balance_available + $item->profit_value,
            ]);

            // Remove item from queue list and success sales
            if ($item->gig->orders_in_queue > 0) {
                $item->gig()->decrement('orders_in_queue');
            }

            $item->gig()->increment('counter_sales');

            $item->is_finished = true;
            $item->save();
        });
    }


    /**
     * Complete Quotation and fund seller available balance
     * and reduce seller pending balance
     */
    public function completeQuotation()
    {
        $quotations = Quotation::where('can_wallet', true)
            ->where('paid', true)
            ->take(50)
            ->get();

        $quotations->each(function ($quotation) {
            User::where('id', $quotation->owner_id)->update([
                'balance_pending' => $quotation->owner->balance_pending - $quotation->profit_value,
                'balance_available' => $quotation->owner->balance_available + $quotation->profit_value,
            ]);
        });
    }
}
