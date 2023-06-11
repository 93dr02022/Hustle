<?php

namespace App\Http\Livewire\Admin\Conversations;

use App\Models\Conversation;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Livewire\Component;
use Livewire\WithPagination;

class ConversationsComponent extends Component
{
    use WithPagination, SEOToolsTrait;

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // Seo
        $this->seo()->setTitle(setSeoTitle(__('messages.t_conversations'), true));
        $this->seo()->setDescription(settings('seo')->description);

        return view('livewire.admin.conversations.conversations', [
            'conversations' => $this->conversations,
        ])->extends('livewire.admin.layout.app')->section('content');
    }

    /**
     * Get list of conversations
     *
     * @return object
     */
    public function getConversationsProperty()
    {
        return Conversation::latest('last_message_at')->paginate(42);
    }
}
