<?php

namespace App\Http\Livewire\Admin\Categories\Options;

use App\Http\Validators\Admin\Categories\CreateValidator;
use App\Models\Category;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class CreateComponent extends Component
{
    use WithFileUploads, SEOToolsTrait, Actions;

    public $name;

    public $slug;

    public $description;

    public $icon;

    public $image;

    public $is_visible;

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // Seo
        $this->seo()->setTitle(setSeoTitle(__('messages.t_create_category'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.categories.options.create')->extends('livewire.admin.layout.app')->section('content');
    }

    /**
     * Create new category
     *
     * @return void
     */
    public function create()
    {
        try {

            // Validate form
            CreateValidator::validate($this);

            // Upload categorory icon
            if ($this->icon) {
                $iconPath = ImageUploader::make($this->icon)->size(100, 100)->toBucket('categories');
            } else {
                $iconPath = null;
            }

            // Upload category image
            if ($this->image) {
                $imagePath = ImageUploader::make($this->image)->size(800)->toBucket('categories');
            } else {
                $imagePath = null;
            }

            // Save category
            $category = new Category();
            $category->uid = uid();
            $category->name = $this->name;
            $category->slug = Str::slug($this->slug);
            $category->description = $this->description ? $this->description : null;
            $category->icon_id = $iconPath;
            $category->image_id = $imagePath;
            $category->is_visible = $this->is_visible ? true : false;
            $category->save();

            // Reset form
            $this->reset();

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
}
