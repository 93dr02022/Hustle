<?php

namespace App\Http\Livewire\Main\Includes;

use App\Models\Language;
use App\Models\Page;
use Cookie;
use Livewire\Component;
use WireUi\Traits\Actions;

class Footer extends Component
{
    use Actions;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.main.includes.footer', [
            'pages' => [],
        ]);
    }

    /**
     * Switch theme
     *
     * @return void
     */
    public function switchTheme()
    {
        try {
            $settings = settings('appearance');

            $current = current_theme();

            if ($current === 'light') {
                Cookie::queue('default_theme', 'dark', 10080);
            } else {
                Cookie::queue('default_theme', 'light', 10080);
            }

            $this->dispatchBrowserEvent('refresh');
        } catch (\Throwable $th) {
            return;
        }
    }
}
