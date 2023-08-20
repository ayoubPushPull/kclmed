<?php

namespace App\Http\Livewire\Admin\Doctors;

use Livewire\Component;

class AddDoctorsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.doctors.add-doctors-component')->layout('layouts.dashboard_admin');
    }
}
