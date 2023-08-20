<?php

namespace App\Http\Livewire\Cabinet\AppointmentsCabinets;


use App\Models\AppointmentCabinet;
use Livewire\Component;

class ShowAppointmentCabinetsComponent extends Component
{
    public $appointment;

    public function mount($slug)
    {
        $this->appointment = AppointmentCabinet::where('slug', $slug)->first();
    }



    public function render()
    {
        return view('livewire.cabinet.appointments-cabinets.show-appointment-cabinets-component')->layout('layouts.dashboard_user');
    }
}
