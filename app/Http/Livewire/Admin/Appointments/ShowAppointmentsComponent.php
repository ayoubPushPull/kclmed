<?php

namespace App\Http\Livewire\Admin\Appointments;
use App\Models\Appointment;
use Livewire\Component;

class ShowAppointmentsComponent extends Component
{
 
    public $appointment;

    public function mount($slug)
    {
        $this->appointment = Appointment::where('slug', $slug)->first();
    }



    public function render()
    {
        return view('livewire.admin.appointments.show-appointments-component')->layout('layouts.dashboard_admin');
    }
}
