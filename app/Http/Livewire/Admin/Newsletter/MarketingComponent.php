<?php

namespace App\Http\Livewire\Admin\Newsletter;

use App\Jobs\Main\Notifications\SendMarketingNotification;
use App\Models\MarketingNotification;
use App\Models\User;
use App\Models\UserNotificationSettings;
use App\Notifications\User\Marketing;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class MarketingComponent extends Component
{
    use Actions, WithPagination;

    public $url;
    public $title;
    public $message;
    public $number_of_users;
    private $paginatedMarketingNotifications;

    public function mount()
    {
        $this->init();
    }
    public function init()
    {
        $this->paginatedMarketingNotifications = MarketingNotification::latest()
            ->with('user:id,first_name,last_name')->paginate(10);
    }

    public function save()
    {
        $marketingNotification = MarketingNotification::create([
            'user_id' => auth()->id(),
            'url' => $this->url ?? url('/'),
            'title' => $this->title,
            'message' => $this->message,
            'number_of_users' => UserNotificationSettings::where('push_marketing_notifications', true)->count(),
        ]);
        $this->notification([
            'title' => __('messages.t_success'),
            'description' => 'Message sent!',
            'icon' => 'success',
        ]);
        //Queue the notifications sent to users
        dispatch(new SendMarketingNotification($marketingNotification));

        // Close modal
        $this->dispatchBrowserEvent('close-modal', 'marketingModal');

        $this->init();
    }

    public function render()
    {
        $data['marketingNotifications'] = $this->paginatedMarketingNotifications;
        return view('livewire.admin.newsletter.marketing-component', $data)->extends('livewire.admin.layout.app')->section('content');
    }
}
