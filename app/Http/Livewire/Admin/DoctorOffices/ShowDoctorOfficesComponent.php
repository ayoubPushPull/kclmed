<?php

namespace App\Http\Livewire\Admin\DoctorOffices;

use App\Models\DoctorOffice;
use Livewire\Component;

class ShowDoctorOfficesComponent extends Component
{

    public $DoctorOffice;

    public function mount($slug)
    {
        $this->DoctorOffice = DoctorOffice::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.admin.doctor-offices.show-doctor-offices-component')->layout('layouts.dashboard_admin');
    }
}
