<?php

namespace App\Http\Livewire\Main\Account\Orders;

use App\Http\Validators\Main\Account\Orders\SendMessageValidator;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderItemWorkConversation;
use App\Notifications\User\Seller\DeliveredWorkNewMessage;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;
use RalphJSmit\Livewire\Urls\Facades\Url;
use WireUi\Traits\Actions;
use App\Models\OrderTimeline;

class ViewOrderComponent extends Component
{
    use WithPagination, SEOTools, Actions;
    public $order;
    public $message;
    public $timelines = [];
    function mount(string $orderId)
    {
        $this->order = Order::where('uid', $orderId)->first();
        $timelines = OrderTimeline::select('order_timelines.*','gigs.title','order_items.uid')
            ->leftjoin('order_items','order_items.id','order_timelines.order_item_id')
            ->leftjoin('gigs','order_items.gig_id','gigs.id')->latest()->take(5)->get();
            if($timelines){
            // array_push($this->timelines,$timelines);
            $this->timelines = $timelines->toArray();
            }
    }
    public function render() 
    {
        // SEO
        $separator = settings('general')->separator;
        $title = __('messages.t_my_orders') . " $separator " . settings('general')->title;
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
        
        return view('livewire.main.account.orders.view-order-component')->extends('livewire.main.layout.app')->section('content');
    }

    /**
     * Send message
     *
     * @return mixed
     */
    public function sendMessage($id)
    {
        try {

            $item = OrderItem::findOrFail($id);

            // Check if order not finished yet
            if ($item->is_finished) {
                return;
            }

            // Validate form
            SendMessageValidator::validate($this);

            // Save message
            $message = new OrderItemWorkConversation();
            $message->item_id = $item->id;
            $message->seller_id = $item->owner_id;
            $message->buyer_id = $this->order->buyer_id;
            $message->msg_from = auth()->id();
            $message->msg_content = clean($this->message);
            $message->save();

            // Reset form
            $this->reset('message');

            // Refresh item
            $item->refresh();

            // Send notification to seller
            $item->owner->notify((new DeliveredWorkNewMessage($item, $message))->locale(config('app.locale')));

            // Send notification
            notification([
                'text' => 't_buyer_sent_u_message_about_delivered_files',
                'action' => url('seller/orders/deliver', $item->uid),
                'user_id' => $item->owner_id,
                'params' => ['buyer' => auth()->user()->username],
            ]);

            // Success
            $this->notification([
                'title' => __('messages.t_success'),
                'description' => __('messages.t_toast_operation_success'),
                'icon' => 'success',
            ]);
            return Url::current();
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
}
