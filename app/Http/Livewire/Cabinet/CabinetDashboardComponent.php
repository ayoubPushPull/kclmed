<?php

namespace App\Http\Livewire\Cabinet;

use Livewire\Component;

class CabinetDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.cabinet.cabinet-dashboard-component')->layout('layouts.dashboard_user');
    }
}
