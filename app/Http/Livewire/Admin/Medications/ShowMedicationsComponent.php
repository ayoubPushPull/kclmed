<?php

namespace App\Http\Livewire\Admin\Medications;
use App\Models\Medication;
use Livewire\Component;

class ShowMedicationsComponent extends Component
{
        
    public $Medication;

    public function mount($slug)
    {
        $this->Medication = Medication::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.admin.medications.show-medications-component')->layout('layouts.dashboard_admin');
    }
}
