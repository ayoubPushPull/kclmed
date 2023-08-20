<?php

namespace App\Http\Livewire\Cabinet\Arrangements;

use App\Models\Arrangement;
use Livewire\Component;

class ShowArrangementsComponent extends Component
{
    public $arrangement;

    public function mount($slug)
    {
        $this->arrangement = Arrangement::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.cabinet.arrangements.show-arrangements-component')->layout('layouts.dashboard_user');
    }
}
