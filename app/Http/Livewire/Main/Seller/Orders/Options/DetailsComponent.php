<?php

namespace App\Http\Livewire\Main\Seller\Orders\Options;

use App\Models\OrderItem;
use App\Models\OrderTimeline;
use App\Notifications\User\Buyer\OrderItemCanceled;
use App\Notifications\User\Buyer\OrderItemInProgress;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;
use WireUi\Traits\Actions;
use App\Http\Validators\Main\Seller\Orders\MessageValidator;
use App\Models\OrderItemWorkConversation;
use App\Notifications\User\Seller\DeliveredWorkNewMessage;

class DetailsComponent extends Component
{
    use SEOToolsTrait, Actions;

    public $order;
    public $timelines = [];
    public $message;

    /**
     * Init component
     *
     * @param  string  $id
     * @return void
     */
    public function mount($id)
    {
        // Get user id
        $user_id = auth()->id();

        // Get order item
        $order = OrderItem::where('owner_id', $user_id)->where('uid', $id)->firstOrFail();

         // // Order item must be in ['delivered', 'proceeded'] status and not finished yet
         if (!in_array($order->status, ['proceeded', 'delivered'])) {
            return redirect('seller/orders')->with('message', __('messages.t_u_cant_send_delivered_work_anymore_status_wrong'));
        }
        // Set order
        $this->order = $order;

        // Get order timelines for seller
        $timelines = OrderTimeline::select('order_timelines.*', 'gigs.title', 'order_items.uid')
        ->leftjoin('order_items', 'order_items.id', 'order_timelines.order_item_id')
        ->leftjoin('gigs', 'order_items.gig_id', 'gigs.id')
        ->where('order_items.owner_id', $user_id)
        ->latest()
        ->take(5)
        ->get();

        $this->timelines = $timelines;
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // SEO
        $separator = settings('general')->separator;
        $title = __('messages.t_order_details') . " $separator " . settings('general')->title;
        $description = settings('seo')->description;
        $ogimage = src(settings('seo')->ogimage);

        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->setCanonical(url()->current());
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->opengraph()->setUrl(url()->current());
        $this->seo()->opengraph()->setType('website');
        $this->seo()->opengraph()->addImage($ogimage);
        $this->seo()->twitter()->setImage($ogimage);
        $this->seo()->twitter()->setUrl(url()->current());
        $this->seo()->twitter()->setSite('@' . settings('seo')->twitter_username);
        $this->seo()->twitter()->addValue('card', 'summary_large_image');
        $this->seo()->metatags()->addMeta('fb:page_id', settings('seo')->facebook_page_id, 'property');
        $this->seo()->metatags()->addMeta('fb:app_id', settings('seo')->facebook_app_id, 'property');
        $this->seo()->metatags()->addMeta('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1', 'name');
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        $this->seo()->jsonLd()->setUrl(url()->current());
        $this->seo()->jsonLd()->setType('WebSite');

        return view('livewire.main.seller.orders.options.details')->extends('livewire.main.seller.layout.app')->section('content');
    }
    /**
     * Send message
     *
     * @return mixed
     */
    public function sendMessage()
    {
        try {
            $item = $this->order->order->buyer;
            // Check if order not finished yet
            if ($this->order->is_finished) {
                return;
            }

            // Validate form
            MessageValidator::validate($this);

            // Save message
            $message = new OrderItemWorkConversation();
            $message->item_id = $this->order->id;
            $message->seller_id = $this->order->owner_id;
            $message->buyer_id = $this->order->order->buyer_id;
            $message->msg_from = auth()->id();
            $message->msg_content = clean($this->message);
            $message->save();

            // Reset form
            $this->reset('message');

            // Refresh order item
            $this->order->refresh();
            // Send notification to Buyer
            $item->notify((new DeliveredWorkNewMessage($item, $message))->locale(config('app.locale')));

            // Success
            $this->notification([
                'title' => __('messages.t_success'),
                'description' => __('messages.t_toast_operation_success'),
                'icon' => 'success',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {

            // Validation error
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('messages.t_toast_form_validation_error'),
                'icon' => 'error',
            ]);

            throw $e;
        } catch (\Throwable $th) {

            // Error
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('messages.t_toast_something_went_wrong'),
                'icon' => 'error',
            ]);

            throw $th;
        }
    }

    /**
     * Let's get started this order
     *
     * @return void
     */
    public function start()
    {
        // Let's see if this item is pending
        if ($this->order->status === 'pending') {

            // We have to mark order as in progress
            $this->order->status = 'proceeded';
            $this->order->expected_delivery_date = $this->calculateExpectedDeliveryDate();
            $this->order->proceeded_at = now();
            $this->order->save();
            //Creating the ordertimeline
            $this->order->orderTimelines()->create([
                'name' => 'Order started',
                'description' => 'Seller has started your order'
            ]);

            // Let's notify the buyer
            $this->order->order->buyer->notify((new OrderItemInProgress($this->order))->locale(config('app.locale')));

            // Send notification
            notification([
                'text' => 't_seller_has_started_ur_order',
                'action' => url('account/orders'),
                'user_id' => $this->order->order->buyer_id,
                'params' => ['seller' => auth()->user()->username],
            ]);

            // Success
            $this->notification([
                'title' => __('messages.t_success'),
                'description' => __('messages.t_toast_operation_success'),
                'icon' => 'success',
            ]);
        }
    }

    /**
     * Caculate expected delivery date
     *
     * @return string
     */
    private function calculateExpectedDeliveryDate()
    {
        // Set empty days variable
        $days = 0;

        // Culculate extra days for upgrades
        $days += $this->order->upgrades()->exists() ? $this->order->upgrades->sum('extra_days') : 0;

        // Add gig delivery time
        $days += $this->order->gig->delivery_time;

        // Calculate expected delivery date
        return now()->addDays($days);
    }

    /**
     * Cancel order
     *
     * @param  string  $id
     * @return void
     */
    public function cancel()
    {
        // Get item
        $item = OrderItem::where('uid', $this->order->uid)->where('owner_id', auth()->id())->where('status', 'pending')->firstOrFail();

        // Remove item price from seller balance
        $item->owner()->update([
            'balance_pending' => $item->owner->balance_pending - $item->profit_value,
        ]);

        // Add item price to buyer balance
        $item->order->buyer()->update([
            'balance_available' => $item->order->buyer->balance_available + $item->total_value,
        ]);

        // Update item
        $item->status = 'canceled';
        $item->canceled_by = 'seller';
        $item->canceled_at = now();
        $item->is_finished = true;
        $item->save();
        //Creating timeline
        $item->orderTimelines()->create([
            'name' => 'Order cancelled',
            'description' => 'Buyer has cancelled your order'
        ]);
        // Decrement orders in queue
        if ($item->gig->orders_in_queue > 0) {
            $item->gig()->decrement('orders_in_queue');
        }

        // Send notification to buyer
        $item->order->buyer->notify((new OrderItemCanceled($item))->locale(config('app.locale')));

        // Send notification
        notification([
            'text' => 't_seller_has_canceled_ur_order',
            'action' => url('account/orders'),
            'user_id' => $item->order->buyer_id,
            'params' => ['seller' => auth()->user()->username],
        ]);

        // Set order
        $this->order = $item;

        // success
        $this->notification([
            'title' => __('messages.t_success'),
            'description' => __('messages.t_order_has_been_successfully_canceled'),
            'icon' => 'success',
        ]);
    }
}
