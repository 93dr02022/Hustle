<?php

namespace App\Http\Livewire\Main\Seller\Reviews\Options;


use App\Http\Validators\Main\Account\Reviews\CreateValidator;
use App\Models\Gig;
use App\Models\OrderItem;
use App\Models\Review;
use App\Notifications\User\Seller\ReviewReceived;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;
use WireUi\Traits\Actions;

class CreateComponent extends Component
{
    use SEOToolsTrait, Actions;

    public Review $review;

    public $rating;

    public $message;

    /**
     * Init component
     *
     * @param  string  $reviewId
     * @return void
     */
    public function mount($reviewId)
    {
        // Get review
        $review = Review::where('uid', $reviewId)->where('seen', false)->first();


        // Check if order item exists
        if (!$review) {
            return redirect('seller/reviews')->with('message', __('messages.t_order_item_could_not_be_found'));
        }

        // Get review if eists
        $reviewEdit = Review::where('seller_id', auth()->id())->where('gig_id', $review->gig_id)->where('order_item_id', $review->order_item_id)->where('seen', true)->first();
        // Check if reviewEdit exists
        if ($reviewEdit) {
            return redirect('seller/reviews/edit/' . $reviewEdit->uid);
        }


        // Set review
        $this->review = $review;
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
        $title = __('messages.t_submit_new_review') . " $separator " . settings('general')->title;
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

        return view('livewire.main.seller.reviews.options.create')->extends('livewire.main.seller.layout.app')->section('content');
    }

    /**
     * Create new review
     *
     * @return void
     */
    public function create()
    {
        try {

            // Validate form
            CreateValidator::validate($this);

            // Create new review
            $review = new Review();
            $review->uid = uid();
            $review->user_id = $this->review->user_id;
            $review->seller_id = auth()->id();
            $review->gig_id = $this->review->gig_id;
            $review->order_item_id = $this->review->order_item_id;
            $review->rating = $this->rating;
            $review->message = clean($this->message);
            $review->review_id = $this->review->id;
            $review->save();

            $this->review->update(['seen' => true]);
            // Count total stars for this gig
            $total_stars = Review::where(['gig_id' => $this->review->gig_id, 'review_id' => null])->sum('rating');

            // Count total reviews for this gig
            $total_reviews = Review::where(['gig_id' => $this->review->gig_id, 'review_id' => null])->count();

            // Set gig rating
            $gig_rating = $total_stars / $total_reviews;

            // Let's update gig rating
            Gig::where('id', $this->review->gig_id)->update([
                'counter_reviews' => $total_reviews,
                'rating' => $gig_rating,
            ]);

            // Now let's send seller a notification message
            $this->review->user->notify((new ReviewReceived($this->review->orderItem, $review))->locale(config('app.locale')));

            // Send notification
            notification([
                'text' => 't_u_have_received_new_rating',
                'action' => url('seller/reviews/details', $review->uid),
                'user_id' => $this->review->user_id,
            ]);

            // Redirect to review preview
            return redirect('seller/reviews');
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
