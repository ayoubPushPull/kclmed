<?php

namespace App\Http\Livewire\Cabinet\Patients;

use App\Models\Patient;
use Livewire\Component;

class ShowPatientsComponent extends Component
{
    public $patient;

    public function mount($slug)
    {
        $this->patient = Patient::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.cabinet.patients.show-patients-component')->layout('layouts.dashboard_user');
    }
}
