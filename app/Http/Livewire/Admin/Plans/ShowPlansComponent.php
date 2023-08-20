<?php

namespace App\Http\Livewire\Admin\Plans;
use App\Models\Plan;
use Livewire\Component;

class ShowPlansComponent extends Component
{
    public $Plan;

    public function mount($slug)
    {
        $this->Plan= Plan::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.admin.plans.show-plans-component')->layout('layouts.dashboard_admin');
    }
}
