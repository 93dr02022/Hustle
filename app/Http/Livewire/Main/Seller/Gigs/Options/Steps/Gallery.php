<?php

namespace App\Http\Livewire\Main\Seller\Gigs\Options\Steps;

use App\Http\Validators\Main\Seller\Gigs\Edit\GalleryValidator;
use App\Models\Gig;
use App\Models\GigDocument;
use App\Models\GigImage;
use App\Utils\Uploader\ImageUploader;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Gallery extends Component
{
    use WithFileUploads, Actions;

    public $images = [];

    public $documents = [];

    public $video_link;

    public $video_id;

    public $thumbnail;

    public $gig;

    /**
     * Init component
     *
     * @param  int  $id
     * @return void
     */
    public function mount(Gig $gig)
    {
        // Set gig
        $this->gig = $gig;

        // Fill form
        $this->fill([
            'video_id' => $gig->video_id,
            'video_link' => $gig->video_link,
        ]);
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.main.seller.gigs.options.steps.gallery');
    }

    /**
     * Add a youtube video
     *
     * @return void
     */
    public function addVideo()
    {
        // Set regex to validate youtube video
        $rx = '~
                ^(?:https?://)?                          # Optional protocol
                (?:www[.])?                              # Optional sub-domain
                (?:youtube[.]com/watch[?]v=|youtu[.]be/) # Mandatory domain name (w/ query string in .com)
                ([^&]{11})                               # Video id of 11 characters as capture group 1
                    ~x';

        // Validate url
        $has_match = preg_match($rx, $this->video_link, $matches);

        // Check if video is valid
        if (isset($matches[1])) {

            // Now we have to check if video really exists or not
            $headers = get_headers('https://www.youtube.com/oembed?format=json&url=http://www.youtube.com/watch?v=' . $matches[1]);

            if (is_array($headers) ? preg_match('/^HTTP\\/\\d+\\.\\d+\\s+2\\d\\d\\s+.*$/', $headers[0]) : false) {

                // Video exists
                $this->notification([
                    'title' => __('messages.t_success'),
                    'description' => __('messages.t_youtube_video_has_been_successfully_added'),
                    'icon' => 'success',
                ]);

                // Close modal
                $this->dispatchBrowserEvent('close-modal', 'modal-add-youtube-video-container');
            } else {

                // Video not exists, reset form
                $this->reset('video_link');

                // Error
                $this->notification([
                    'title' => __('messages.t_error'),
                    'description' => __('messages.t_youtube_video_not_exists'),
                    'icon' => 'error',
                ]);

                return;
            }
        } else {

            // Video not valid, reset form
            $this->reset('video_link');

            // Error
            $this->notification([
                'title' => __('messages.t_error'),
                'description' => __('messages.t_youtube_video_invalid'),
                'icon' => 'error',
            ]);

            return;
        }
    }

    /**
     * Remove video
     *
     * @return void
     */
    public function removeVideo()
    {
        // Reset video form
        $this->reset('video_link');
    }

    /**
     * Go back to preview step
     *
     * @return void
     */
    public function back()
    {
        // Go back to preview step
        return redirect('seller/gigs/edit/' . $this->gig->uid . '?step=requirements');
    }

    /**
     * Delete image from gallery
     *
     * @param  int  $id
     * @return void
     */
    public function removeImage($id)
    {
        // Get image
        $image = GigImage::where('id', $id)
            ->where('gig_id', $this->gig->id)
            ->firstOrFail();

        // Delete images from local/server sides
        ImageUploader::deBucket($image->img_thumb_id);
        ImageUploader::deBucket($image->img_medium_id);
        ImageUploader::deBucket($image->img_large_id);

        // Now delete image
        $image->delete();

        // Refresh gig
        $this->gig->refresh();

        // Success
        $this->notification([
            'title' => __('messages.t_success'),
            'description' => __('messages.t_file_has_been_successfully_deleted'),
            'icon' => 'success',
        ]);
    }

    /**
     * Remove document
     *
     * @param  int  $id
     * @return void
     */
    public function removeDocument($id)
    {
        $document = GigDocument::where('id', $id)
            ->where('gig_id', $this->gig->id)
            ->firstOrFail();

        ImageUploader::deBucket($document->uid);

        $document->delete();

        // Refresh gig
        $this->gig->refresh();

        // Success
        $this->notification([
            'title' => __('messages.t_success'),
            'description' => __('messages.t_file_has_been_successfully_deleted'),
            'icon' => 'success',
        ]);
    }

    /**
     * Save gallery data section
     *
     * @return void
     */
    public function save()
    {
        try {

            // Validate form
            GalleryValidator::all($this);

            // Check if request has thumbnail image
            if ($this->thumbnail) {
                $imageThumbPath = ImageUploader::make($this->thumbnail)
                    ->unBucket($this->gig->image_thumb_id)
                    ->size(400)
                    ->toBucket('gigs/previews/small');

                $imageMediumPath = ImageUploader::make($this->thumbnail)
                    ->unBucket($this->gig->image_medium_id)
                    ->size(800)
                    ->toBucket('gigs/previews/medium');

                $imageLargePath = ImageUploader::make($this->thumbnail)
                    ->unBucket($this->gig->image_large_id)
                    ->size(1200)
                    ->toBucket('gigs/previews/large');
            } else {
                $imageThumbPath = $this->gig->image_thumb_id;
                $imageMediumPath = $this->gig->image_medium_id;
                $imageLargePath = $this->gig->image_large_id;
            }

            // Update gig
            $this->gig->video_id = $this->video_link ? youtubeId($this->video_link) : $this->video_id;
            $this->gig->video_link = $this->video_link;
            $this->gig->image_thumb_id = $imageThumbPath;
            $this->gig->image_medium_id = $imageMediumPath;
            $this->gig->image_large_id = $imageLargePath;
            $this->gig->save();

            // Check if request has new gallery images
            if (is_array($this->images) && count($this->images)) {

                // Loop through old images
                $this->gig->images->each(function ($image) {
                    ImageUploader::deBucket($image->img_thumb_id);
                    ImageUploader::deBucket($image->img_medium_id);
                    ImageUploader::deBucket($image->img_large_id);
                });

                // Delete old gallery
                GigImage::where('gig_id', $this->gig->id)->delete();

                // Upload new images
                collect($this->images)->each(function ($image) {
                    $thumbPath = ImageUploader::make($image)->size(400)->toBucket('gigs/gallery/small');
                    $mediumPath = ImageUploader::make($image)->size(800)->toBucket('gigs/gallery/medium');
                    $largePath = ImageUploader::make($image)->size(1200)->toBucket('gigs/gallery/large');

                    GigImage::create([
                        'gig_id' => $this->gig->id,
                        'img_thumb_id' => $thumbPath,
                        'img_medium_id' => $mediumPath,
                        'img_large_id' => $largePath,
                    ]);
                });
            }

            // Check if request has new documents
            if (settings('publish')->is_documents_enabled && is_array($this->documents) && count($this->documents)) {

                // Delete old documents
                foreach ($this->gig->documents as $doc) {
                    ImageUploader::deBucket($doc->uid);

                    $doc->delete();
                }

                collect($this->documents)->each(function ($doc) {
                    $bucketFileName = uid() . '.pdf';
                    $uploadFileName = $doc->getClientOriginalName();
                    $fileSize = $doc->getSize();

                    // Move document to s3 bucket
                    $path = $doc->storeAs('gigs/documents', $bucketFileName, 's3');

                    GigDocument::create([
                        'uid' => $path,
                        'gig_id' => $this->gig->id,
                        'name' => $uploadFileName,
                        'size' => $fileSize,
                    ]);
                });
            }

            // Success
            return redirect('seller/gigs')->with('success', __('messages.t_gig_updated_successfull'));
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
