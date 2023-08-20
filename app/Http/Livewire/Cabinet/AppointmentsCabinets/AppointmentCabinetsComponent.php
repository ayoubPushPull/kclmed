<?php

namespace App\Http\Livewire\Cabinet\AppointmentsCabinets;

use Livewire\Component;
use App\Models\AppointmentCabinet;
use Illuminate\Support\Facades\Auth;

class AppointmentCabinetsComponent extends Component
{
    public $uid ;

    public function changeStatus($id){
        $appointment = AppointmentCabinet::find($id);
        $appointment->status = $appointment->status == 0 ? 1 : 0;
        $appointment->save();

    }

    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $appointment = AppointmentCabinet::find($this->uid);
        $appointment->delete = 1;
        $appointment->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }
    public function render()
    {
        $appoitment= AppointmentCabinet::where('delete', 0)->where('cabinet_id',Auth::user()->personal->cabinet_id)->get();
        return view('livewire.cabinet.appointments-cabinets.appointment-cabinets-component',compact('appoitment'))->layout('layouts.dashboard_user');
    }
}
