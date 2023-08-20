<?php

namespace App\Http\Livewire\Admin\Appointments;

use App\Models\Appointment;
use Livewire\Component;

class EditAppointmentsComponent extends Component
{

    public $name, $email, $phone, $time, $date,$appointment;

   


    public function mount($slug)
    {
        $this->appointment = Appointment::where('slug', $slug)->first();
        $this->name = $this->appointment->name;
        $this->email = $this->appointment->email;
        $this->phone = $this->appointment->phone;
        $this->time = $this->appointment->time;
        $this->date = $this->appointment->date;
    }

    public function update()
    {

        $appointment = Appointment::find($this->appointment->id);
        $appointment->name = $this->name;
        $appointment->email = $this->email;
        $appointment->phone = $this->phone;
        $appointment->time = $this->time;
        $appointment->date = $this->date;
        $appointment->save();

        $this->emit('update');
        session()->flash('success_message', 'Appointment has been successfully Created');
        return redirect()->route('admin-Appointments');

    }

    public function render()
    {  
        return view('livewire.admin.appointments.edit-appointments-component')->layout('layouts.dashboard_admin');
    }
}
