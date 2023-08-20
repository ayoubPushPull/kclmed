<?php

namespace App\Http\Livewire\Admin\Doctors;

use Livewire\Component;

class EditDoctorsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.doctors.edit-doctors-component')->layout('layouts.dashboard_admin');
    }
}
