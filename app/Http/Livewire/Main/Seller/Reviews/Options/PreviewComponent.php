<?php
namespace App\Http\Livewire\Main\Seller\Reviews\Options;

use App\Models\Gig;
use App\Models\Review;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;

class PreviewComponent extends Component
{
    use SEOToolsTrait;

    public $review;

    /**
     * Init component
     *
     * @param  string  $id
     * @return void
     */
    public function mount($id)
    {
        // Get review
        $review = Review::where('uid', $id)->firstOrFail();
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
        $title = __('messages.t_preview_review')." $separator ".settings('general')->title;
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
        $this->seo()->twitter()->setSite('@'.settings('seo')->twitter_username);
        $this->seo()->twitter()->addValue('card', 'summary_large_image');
        $this->seo()->metatags()->addMeta('fb:page_id', settings('seo')->facebook_page_id, 'property');
        $this->seo()->metatags()->addMeta('fb:app_id', settings('seo')->facebook_app_id, 'property');
        $this->seo()->metatags()->addMeta('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1', 'name');
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        $this->seo()->jsonLd()->setUrl(url()->current());
        $this->seo()->jsonLd()->setType('WebSite');

        return view('livewire.main.seller.reviews.options.preview')->extends('livewire.main.seller.layout.app')->section('content');
    }
    public function delete($id)
    {
        // Get review
        $review = Review::where('id', $id)->where('seller_id', auth()->id())->firstOrFail();

        // Count total rating
        $total_rating = Review::where('id', '!=', $review->id)->where('gig_id', $review->gig_id)->where('review_id',null)->sum('rating');

        // Count total reviews
        $total_reviews = Review::where('id', '!=', $review->id)->where('gig_id', $review->gig_id)->where('review_id',null)->count();

        // Calculate gig rating
        $gig_rating = $total_reviews > 0 ? $total_rating / $total_reviews : 0;

        // Get gig
        Gig::where('id', $review->gig_id)->update([
            'counter_reviews' => $total_reviews,
            'rating' => $gig_rating,
        ]);

        // Delete review
        $review->delete();

        // success
        $this->notification([
            'title' => __('messages.t_success'),
            'description' => __('messages.t_review_deleted_successfully'),
            'icon' => 'success',
        ]);
    }
}
