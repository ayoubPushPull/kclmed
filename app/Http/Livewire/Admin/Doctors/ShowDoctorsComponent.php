<?php

namespace App\Http\Livewire\Admin\Doctors;

use Livewire\Component;

class ShowDoctorsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.doctors.show-doctors-component')->layout('layouts.dashboard_admin');
    }
}
