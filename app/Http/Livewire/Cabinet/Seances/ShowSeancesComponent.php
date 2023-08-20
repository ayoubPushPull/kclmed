<?php

namespace App\Http\Livewire\Cabinet\Seances;

use App\Models\Seance;
use Livewire\Component;

class ShowSeancesComponent extends Component
{
    public $seance;

    public function mount($slug)
    {
        $this->seance =Seance::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.cabinet.seances.show-seances-component')->layout('layouts.dashboard_user');
    }
}
