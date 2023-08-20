<?php

namespace App\Http\Livewire\Cabinet\MedicationsCabinets;

use App\Models\MedicationCabinets;
use Livewire\Component;

class ShowMedicationCabinetsComponent extends Component
{
    public $medication;

    public function mount($slug)
    {
        $this->medication =MedicationCabinets::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.cabinet.medications-cabinets.show-medication-cabinets-component')->layout('layouts.dashboard_user');
    }
}
