<?php

namespace App\Http\Livewire\Admin\Doctors;

use Livewire\Component;

class AdminDoctorsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.doctors.admin-doctors-component')->layout('layouts.dashboard_admin');
    }
}
