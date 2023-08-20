<?php

namespace App\Http\Livewire\Admin\CabinetTypes;
use App\Models\CabinetType;
use Livewire\Component;

class ShowCabinetTypesComponent extends Component
{

    public $CabinetType;

    public function mount($slug)
    {
        $this->CabinetType = CabinetType::where('slug', $slug)->first();
    }
    
    public function render()
    {
        return view('livewire.admin.cabinet-types.show-cabinet-types-component')->layout('layouts.dashboard_admin');
    }
}
