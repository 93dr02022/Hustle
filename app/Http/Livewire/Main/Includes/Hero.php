<?php

namespace App\Http\Livewire\Main\Includes;

use App\Models\Gig;
use App\Models\User;
use Conner\Tagging\Model\Tag;
use Livewire\Component;
use WireUi\Traits\Actions;

class Hero extends Component
{
    use Actions;

    public $q;

    public $gigs = [];

    public $sellers = [];

    public $tags = [];

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        // 
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.main.includes.hero3', [
            'states' => modelCaches('nigerian_states'),
            'slides' => $this->slides()
        ]);
    }

    /**
     * Listen when q keyword changes
     *
     * @return void
     */
    public function updatedQ()
    {
        // Search
        $this->search();
    }

    /**
     * Search by query
     *
     * @return mixed
     */
    public function search()
    {

        // Check if has a searching keyword
        if ($this->q) {

            // Set keyword
            $keyword = $this->q;

            // Get gigs same as this keyword
            $gigs = Gig::query()
                ->active()
                ->where(function ($query) use ($keyword) {
                    return $query->where('title', 'LIKE', "%{$keyword}%")
                        ->orWhere('slug', 'LIKE', "%{$keyword}%")
                        ->orWhere('description', 'LIKE', "%{$keyword}%");
                })
                ->select('id', 'title', 'slug')
                ->limit(10)
                ->get();

            // Set gigs
            $this->gigs = $gigs;

            // Get sellers
            $sellers = User::query()
                ->whereIn('status', ['verified', 'active'])
                ->where('account_type', 'seller')
                ->where(function ($query) use ($keyword) {
                    return $query->where('username', 'LIKE', "%{$keyword}%")
                        ->orWhere('fullname', 'LIKE', "%{$keyword}%")
                        ->orWhere('headline', 'LIKE', "%{$keyword}%")
                        ->orWhere('description', 'LIKE', "%{$keyword}%");
                })
                ->select('id', 'username', 'avatar_id', 'status', 'headline', 'fullname', 'description', 'account_type')
                ->with('avatar')
                ->limit(10)
                ->get();

            // Set sellers
            $this->sellers = $sellers;

            // Get tags
            $tags = Tag::query()
                ->where('name', 'LIKE', "%{$keyword}%")
                ->select('slug', 'name')
                ->limit(10)
                ->get();

            // Set tags
            $this->tags = $tags;
        } else {

            // Reset data
            $this->reset(['q', 'gigs', 'sellers', 'tags']);
        }
    }

    /**
     * Go to search page
     *
     * @return void
     */
    public function enter()
    {
        // Check if has a search term
        if (!$this->q) {

            // Error
            $this->notification([
                'title' => __('messages.t_info'),
                'description' => __('messages.t_pls_type_a_search_term_first'),
                'icon' => 'info',
            ]);

            return;
        }

        // Redirect to search page
        return redirect('search?q=' . $this->q);
    }

    /**
     * hero slides
     */
    public function slides()
    {
        return $slides = [
            [
                'title' => 'Earn Money and Experience',
                'subTitle' => 'With Top Clients',
                'image' => '/img/home/experience.svg'
            ],
            [
                'title' => 'Expert Tailors',
                'subTitle' => 'for Impeccable Outfits.',
                'image' => '/img/home/tailor.png'
            ],
            [
                'title' => 'Get your next big project',
                'subTitle' => 'build with experts',
                'image' => '/img/home/worker.png'
            ],
            [
                'title' => 'Expert Mechanics for',
                'subTitle' => 'Automotive Services.',
                'image' => '/img/home/mechanic.png'
            ],
            [
                'title' => 'Top-notch Plumbers',
                'subTitle' => 'at Your Service.',
                'image' => '/img/home/plumber.png'
            ],
            [
                'title' => 'Verified Pro Barbers',
                'subTitle' => 'for Exceptional Haircuts.',
                'image' => '/img/home/barber-slide.png'
            ]
        ];
    }
}
