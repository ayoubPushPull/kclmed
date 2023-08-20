<?php

namespace App\Http\Livewire\Admin\Appointments;
use App\Models\Appointment;
use App\Models\DoctorOffice;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;
 
class AppointmentsComponent extends Component
{
    
    public $uid ;
    public $searchTerm;
  
    public function confirmDelete($id)
    {
        $this->uid = $id;
    } 
    public function delete()
    {
        $appointment = Appointment::find($this->uid);
        $appointment->delete = 1;
        $appointment->save();
        $this->emit('delete');
        $message = "Appointment has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function changeStatus($id){
        $appointment = Appointment::find($id);
        $appointment->status = $appointment->status == 0 ? 1 : 0;
        $appointment->save();

    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $appointment = Appointment::where('name', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.appointments.appointments-component',compact('appointment','users','doctoroffices','request'))->layout('layouts.dashboard_admin');
    
    }
}
  