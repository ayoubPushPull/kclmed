<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DoctorsComponent extends Component
{
    public function render()
    {
        return view('livewire.doctors-component')->layout('layouts.landing');
    }
}
