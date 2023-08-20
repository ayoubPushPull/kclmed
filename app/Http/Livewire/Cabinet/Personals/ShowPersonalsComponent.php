<?php

namespace App\Http\Livewire\Cabinet\Personals;

use App\Models\Personal;
use Livewire\Component;

class ShowPersonalsComponent extends Component
{
    public $personal;

    public function mount($slug)
    {
        $this->personal = Personal::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.cabinet.personals.show-personals-component')->layout('layouts.dashboard_user');
    }
}
