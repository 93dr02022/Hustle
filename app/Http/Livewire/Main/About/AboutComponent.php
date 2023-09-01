<?php


namespace App\Http\Livewire\Main\About;

use Livewire\Component;


class AboutComponent extends Component
{
    public function render()
    {
        return view('livewire.main.about.about')->extends('livewire.main.about.layout.about')->section('content');
    }
}
