<?php

namespace App\Http\Livewire\Main\Auth;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutComponent extends Component
{
    use SEOToolsTrait;

    public function mount()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
