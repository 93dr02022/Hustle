<?php

namespace App\Http\Livewire\Admin\Categories\Options;

use App\Http\Validators\Admin\Categories\EditValidator;
use App\Models\Category;
use App\Utils\Uploader\ImageUploader;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class EditComponent extends Component
{
    use WithFileUploads, SEOToolsTrait, Actions;

    public $name;

    public $slug;

    public $description;

    public $icon;

    public $image;

    public $is_visible;

    public $category;

    public function mount($id)
    {
        // Get category
        $category = Category::where('uid', $id)->firstOrFail();

        // Fill form
        $this->fill([
            'name' => $category->name,
            'slug' => $category->slug,
            'description' => $category->description,
            'is_visible' => $category->is_visible ? 1 : 0,
        ]);

        // Set category
        $this->category = $category;
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // Seo
        $this->seo()->setTitle(setSeoTitle(__('messages.t_edit_category'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.categories.options.edit')->extends('livewire.admin.layout.app')->section('content');
    }

    /**
     * Update category
     *
     * @return void
     */
    public function update()
    {
        try {
            // Validate form
            EditValidator::validate($this);

            // Upload categorory icon
            if ($this->icon) {
                $iconPath = ImageUploader::make($this->icon)
                    ->unBucket($this->category->icon_id)
                    ->size(100, 100)
                    ->toBucket('categories');
            } else {
                $iconPath = $this->category->icon_id;
            }

            // Upload category image
            if ($this->image) {
                $imagePath = ImageUploader::make($this->image)
                    ->unBucket($this->category->image_id)
                    ->size(800)
                    ->toBucket('categories');
            } else {
                $imagePath = $this->category->image_id;
            }

            // Update category
            $this->category->name = $this->name;
            $this->category->slug = Str::slug($this->slug);
            $this->category->description = $this->description ? $this->description : null;
            $this->category->icon_id = $iconPath;
            $this->category->image_id = $imagePath;
            $this->category->is_visible = $this->is_visible ? true : false;
            $this->category->save();

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
