<?php

namespace App\Http\Livewire\Main\Create;

use App\Models\Admin;
use App\Models\Gig;
use App\Models\GigDocument;
use App\Models\GigFaq;
use App\Models\GigImage;
use App\Models\GigRequirement;
use App\Models\GigRequirementOption;
use App\Models\GigSeo;
use App\Models\GigUpgrade;
use App\Notifications\Admin\PendingGig;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class CreateComponent extends Component
{
    use WithFileUploads, SEOToolsTrait, Actions;

    // Overview section
    public $title;

    public $category;

    public $subcategory;

    public $description;

    public $seo_title;

    public $seo_description;

    public $tags = [];

    public $faqs = [];

    // Pricing
    public $price;

    public $delivery_time;

    public $upgrades;

    // Requirements
    public $requirements;

    // Gallery
    public $images;

    public $documents;

    public $video_link;

    public $video_id;

    public $thumbnail;

    public $isFinished = false;

    public $is_approved = false;

    public $current_step = 'overview';

    protected $listeners = [
        'data-saved-overview' => 'overview',
        'data-saved-pricing' => 'pricing',
        'data-saved-requirements' => 'requirements',
        'data-saved-gallery' => 'gallery',
        'back',
    ];

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // SEO
        $separator = settings('general')->separator;
        $title = __('messages.t_publish_new_gig') . " $separator " . settings('general')->title;
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

        return view('livewire.main.create.create')->extends('livewire.main.layout.app')->section('content');
    }

    /**
     * Go back to preview step
     *
     * @return void
     */
    public function back()
    {
        // Check current step
        switch ($this->current_step) {
            case 'pricing':
                $this->current_step = 'overview';
                break;

            case 'requirements':
                $this->current_step = 'pricing';
                break;

            case 'gallery':
                $this->current_step = 'requirements';
                break;
        }
    }

    /**
     * Save overview section
     *
     * @param  array  $data
     * @return void
     */
    public function overview($data)
    {
        try {

            // Set data
            $this->title = $data['title'];
            $this->category = $data['category'];
            $this->subcategory = $data['subcategory'];
            $this->description = $data['description'];
            $this->seo_title = $data['seo_title'];
            $this->seo_description = $data['seo_description'];
            $this->tags = $data['tags'];
            $this->faqs = $data['faqs'];

            // Form valid, now go to next step
            $this->current_step = 'pricing';

            // Scroll up
            $this->dispatchBrowserEvent('scrollUp');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Save pricing section
     *
     * @param  array  $data
     * @return void
     */
    public function pricing($data)
    {
        try {

            // Set data
            $this->price = $data['price'];
            $this->delivery_time = $data['delivery_time'];
            $this->upgrades = $data['upgrades'];

            // Form valid, now go to next step
            $this->current_step = 'requirements';

            // Scroll up
            $this->dispatchBrowserEvent('scrollUp');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Save requirements section
     *
     * @param  array  $data
     * @return void
     */
    public function requirements($data)
    {
        try {

            // Set requirements
            $this->requirements = $data['requirements'];

            // Form valid, now go to next step
            $this->current_step = 'gallery';

            // Scroll up
            $this->dispatchBrowserEvent('scrollUp');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Save gallery section
     *
     * @param  array  $data
     * @return void
     */
    public function gallery($data)
    {

        try {

            // Loop through images
            foreach ($data['images'] as $key => $image) {
                $this->images[$key] = new TemporaryUploadedFile($image, config('filesystems.default'));
            }

            // Loop through documents
            if (isset($data['documents'])) {
                foreach ($data['documents'] as $key => $document) {
                    $this->documents[$key] = new TemporaryUploadedFile($document, config('filesystems.default'));
                }
            }

            // Set gallery data
            $this->thumbnail = new TemporaryUploadedFile($data['thumbnail'], config('filesystems.default'));
            $this->video_link = $data['video_link'];
            $this->video_id = $data['video_id'];

            //Post gig
            $this->finish();

            // Scroll up
            $this->dispatchBrowserEvent('scrollUp');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Now let's post this gig
     *
     * @return void
     */
    public function finish()
    {
        try {
            $uid = uid();

            // Get title
            $title = htmlspecialchars_decode(clean($this->title));

            // Generate unique slug for this gig
            $slug = substr(Str::slug($title), 0, 138) . '-' . $uid;

            // Get description
            $description = clean($this->description);

            // Get price
            $price = clean($this->price);

            // Get delivery time
            $delivery_time = $this->delivery_time;

            // Get parent category
            $category_id = $this->category;

            // Get subcategory
            $subcategory_id = $this->subcategory;

            // Get gig status
            $status = settings('publish')->auto_approve_gigs ? 'active' : 'pending';

            // Check if gig has upgrades
            $has_upgrades = is_array($this->upgrades) && count($this->upgrades) ? true : false;

            // Check if gig has faqs
            $has_faqs = is_array($this->faqs) && count($this->faqs) ? true : false;

            // Get video link
            $video_link = $this->video_link ? clean($this->video_link) : null;

            // Get video id
            $video_id = $this->video_id ? clean($this->video_id) : null;

            // Get gig preview image
            $preview = $this->thumbnail;

            $imageThumbUrl = ImageUploader::make($preview)->size(400)->toBucket('gigs/previews/small');
            $imageMediumUrl = ImageUploader::make($preview)->size(800)->toBucket('gigs/previews/medium');
            $imageLargeUrl = ImageUploader::make($preview)->size(1200)->toBucket('gigs/previews/large');

            $gig = Gig::create([
                'uid' => $uid,
                'user_id' => auth()->id(),
                'title' => $title,
                'slug' => $slug,
                'description' => $description,
                'price' => $price,
                'delivery_time' => $delivery_time,
                'category_id' => $category_id,
                'subcategory_id' => $subcategory_id,
                'image_thumb_id' => $imageThumbUrl,
                'image_medium_id' => $imageMediumUrl,
                'image_large_id' => $imageLargeUrl,
                'status' => $status,
                'has_upgrades' => $has_upgrades,
                'has_faqs' => $has_faqs,
                'video_link' => $video_link,
                'video_id' => $video_id,
            ]);


            // Save gig tag
            foreach ($this->tags as $tag) {
                $gig->tag($tag);
            }

            // Check if gig has upgrades
            if (is_array($this->upgrades) && count($this->upgrades)) {

                foreach ($this->upgrades as $upgrade) {
                    GigUpgrade::create([
                        'uid' => uid(),
                        'gig_id' => $gig->id,
                        'title' => $upgrade['title'],
                        'price' => $upgrade['price'],
                        'extra_days' => isset($upgrade['extra_days']) ? $upgrade['extra_days'] : 0,
                    ]);
                }
            }

            // Check if gig has faqs
            if (is_array($this->faqs) && count($this->faqs)) {

                foreach ($this->faqs as $faq) {
                    GigFaq::create([
                        'gig_id' => $gig->id,
                        'question' => clean($faq['question']),
                        'answer' => clean($faq['answer']),
                    ]);
                }
            }

            // Check if gig has requirements
            if (count($this->requirements)) {

                // Loop through requirements
                foreach ($this->requirements as $req) {
                    $requirement = GigRequirement::create([
                        'gig_id' => $gig->id,
                        'question' => clean($req['question']),
                        'type' => $req['type'],
                        'is_required' => isset($req['is_required']) ? $req['is_required'] : false,
                        'is_multiple' => isset($req['is_multiple']) ? $req['is_multiple'] : false,
                    ]);

                    // Check if requirement multiple choices
                    if ($req['type'] === 'choice') {

                        // Loop through options
                        foreach ($req['options'] as $option) {

                            // Save option
                            GigRequirementOption::create([
                                'requirement_id' => $requirement->id,
                                'option' => $option,
                            ]);
                        }
                    }
                }
            }

            // Check if gig has custom seo
            if ($this->seo_title && $this->seo_description) {
                GigSeo::create([
                    'gig_id' => $gig->id,
                    'title' => clean($this->seo_title),
                    'description' => clean($this->seo_description),
                ]);
            }

            // Save gig images
            foreach ($this->images as $image) {
                $imgThumbUrl = ImageUploader::make($image)->size(400)->toBucket('gigs/gallery/small');
                $imgMedium = ImageUploader::make($image)->size(800)->toBucket('gigs/gallery/medium');
                $imgLargeUrl = ImageUploader::make($image)->size(1200)->toBucket('gigs/gallery/large');

                GigImage::create([
                    'gig_id' => $gig->id,
                    'img_thumb_id' => $imgThumbUrl,
                    'img_medium_id' => $imgMedium,
                    'img_large_id' => $imgLargeUrl,
                ]);
            }

            // Check if documents exists in request
            if (settings('publish')->is_documents_enabled && is_array($this->documents) && count($this->documents)) {

                collect($this->documents)->each(function ($doc) use ($gig) {
                    $bucketFileName = uid() . '.pdf';
                    $uploadFileName = $doc->getClientOriginalName();
                    $fileSize = $doc->getSize();

                    // Move document to s3 bucket
                    $path = $doc->storeAs('gigs/documents', $bucketFileName, 's3');
                    $fileUrl = Storage::disk('s3')->url($path);

                    GigDocument::create([
                        'uid' => $fileUrl,
                        'gig_id' => $gig->id,
                        'name' => $uploadFileName,
                        'size' => $fileSize,
                    ]);
                });
            }

            // Gig has been posted successfully
            $this->isFinished = url('service', $slug);

            // Send notification to admin
            if ($status === 'pending') {

                $this->is_approved = false;

                Admin::first()->notify((new PendingGig($gig))->locale(config('app.locale')));
            } else {

                $this->is_approved = true;
            }

            // Success message
            $this->notification([
                'title' => __('messages.t_success'),
                'description' => __('messages.t_gig_created_successfully'),
                'icon' => 'success',
            ]);
        } catch (\Throwable $th) {
            throw $th;
            // dd($th);
        }
    }
}
