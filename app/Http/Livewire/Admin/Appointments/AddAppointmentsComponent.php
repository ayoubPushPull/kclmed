<?php

namespace App\Http\Livewire\Admin\Appointments;

use Livewire\Component;
use App\Models\Appointment as Appointments;
use Illuminate\Support\Str;
class AddAppointmentsComponent extends Component
{

 

    public $name, $email, $phone, $time, $date, $successMessage = '' ;


    public function submitForm()
    {

        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'time' => 'required',
            'date' => 'required', 

        ]);


        $appointment = Appointments::create([

           'slug' => Str::of($this->name)->slug(),
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'time' => $this->time,
            'date' => $this->date,
        
        ]);

        session()->flash('success_message', 'Appointment has been successfully Created');
        return redirect()->route('admin-Appointments');

      
    }
 
    
    public function render()
    {
        return view('livewire.admin.appointments.add-appointments-component')->layout('layouts.dashboard_admin');
    }
}
  