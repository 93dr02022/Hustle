<?php

namespace App\Http\Livewire\Main\Account\Orders;

use App\Http\Validators\Main\Account\Refunds\RequestValidator;
use App\Models\OrderItem;
use App\Models\Refund;
use App\Notifications\User\Seller\RefundRequest;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;
use WireUi\Traits\Actions;

class RequestReview extends Component
{
    use SEOToolsTrait, Actions;

    public $item;
    public $review_description;

    /**
     * Init component
     *
     * @param  string  $orderId
     * @return void
     */
    public function mount($orderId)
    {
        // Get item
        $item = OrderItem::where('uid', $orderId)
            ->where('owner_id', '!=', auth()->id())
            ->whereNotNull('expected_delivery_date')
            ->whereHas('order', function ($query) {
                return $query->where('buyer_id', auth()->id());
            })
            ->firstOrFail();
        $this->item = $item;
        // Check if review is available

        if ($item->total_reviews == $item->count_review) {
            // Error
            return redirect('account/orders/files?orderId=' . $item->order->uid . '&itemId=' . $item->uid)->with('error', __('messages.t_dont_have_any_review'));
        }

        if ($item->is_review_sent) {
            // Error
            return redirect('account/orders/files?orderId=' . $item->order->uid . '&itemId=' . $item->uid)->with('error', 'Wait for seller to submit work for your previous review.');
        }

        // set item
        $this->item = $item;
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
        $title = __('messages.t_request_review') . " $separator " . settings('general')->title;
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

        return view('livewire.main.account.orders.request-review')->extends('livewire.main.layout.app')->section('content');
    }

    /**
     * Request review
     *
     * @return void
     */
    public function request()
    {
        try {

            // Validate form
            RequestValidator::validate($this);

            // Create new refund
            $refund = new Refund();
            $refund->uid = uid();
            $refund->item_id = $this->item->id;
            $refund->seller_id = $this->item->owner_id;
            $refund->buyer_id = auth()->id();
            $refund->reason = clean($this->reason);
            $refund->save();

            // Send notification to seller
            $this->item->owner->notify((new RefundRequest($refund))->locale(config('app.locale')));

            // Send notification
            notification([
                'text' => 't_buyer_opened_new_refund_dispute',
                'action' => url('seller/refunds/details', $refund->uid),
                'user_id' => $refund->seller_id,
                'params' => ['buyer' => auth()->user()->username],
            ]);

            // Redirect to refund details
            return redirect('account/refunds/details/' . $refund->uid);
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
                'description' => $th->getMessage(),
                'icon' => 'error',
            ]);
        }
    }
    function requestReview()
    {
        $this->validate([
            'review_description' => 'required|string'
        ]);
        $this->item->deliver_work_opened = true;
        $this->item->is_review_sent = true;
        $this->item->reviewed_at = now();
        $this->item->save();

        $this->item->deliveredWorks()->create([
            'uid' => uid(),
            'review_description' => $this->review_description
        ]);

        $this->item->orderTimelines()->create([
            'name' => 'Order Reviewed',
            'description' => auth()->user()->username . ' request for review'
        ]);
        session()->flash('success', 'Request for review sent successfully. Only ' . ($this->item->total_reviews - $this->item->count_review) . ' review(s) remain.');
        return redirect('account/orders/files?orderId=' . $this->item->order->uid . '&itemId=' . $this->item->uid);
    }
}
