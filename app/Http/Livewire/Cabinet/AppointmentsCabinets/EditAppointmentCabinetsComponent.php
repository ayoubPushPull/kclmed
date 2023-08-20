<?php

namespace App\Http\Livewire\Cabinet\AppointmentsCabinets;

use App\Models\AppointmentCabinet;
use App\Models\AssuranceType;
use App\Models\DoctorOffice;
use App\Models\Patient;
use Livewire\Component;

class EditAppointmentCabinetsComponent extends Component
{
    public $title,$datetime,$date,$time,$patient_cin,$patient_id;
    public $appointment;

    public function mount($slug)
    {
        $this->appointment= AppointmentCabinet::where('slug', $slug)->first();
        $this->title = $this->appointment->title;
        $this->datetime = $this->appointment->datetime;
        $this->date=$this->appointment->date;
        $this->time=$this->appointment->time;
        $this->patient_cin=$this->appointment->patient_cin;
        $this->patient_id=$this->appointment->patient_id;
    }

    public function update()
    {

        $appointment= AppointmentCabinet::find($this->appointment->id);
        $appointment->title = $this->title;
        $appointment->datetime = $this->datetime;
        $appointment->date = $this->date;
        $appointment->time = $this->time;
        $appointment->patient_cin = $this->patient_cin;
        $appointment->patient_id= $this->patient_id;
        $appointment->save();
        $this->emit('update');   
        session()->flash('success_message', 'Appointment has been update successfully');
        return redirect()->route('cabinet-AppointmentCabinets');
    }
    public function render()
    {
        $patient=Patient::all();
        $cabinet=DoctorOffice::all();
        $assurance=AssuranceType::all();
        return view('livewire.cabinet.appointments-cabinets.edit-appointment-cabinets-component',compact('patient','cabinet','assurance'))->layout('layouts.dashboard_user');
    }
}
