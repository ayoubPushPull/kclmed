<?php

namespace App\Http\Livewire\Admin\Medications;

use App\Models\Appointment;
use App\Models\DoctorOffice;
use App\Models\Medication;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class MedicationsComponent extends Component
{  

    public $uid,$searchTerm;
   
  
    public function confirmDelete($id)
    {
        $this->uid = $id;
    } 
    public function delete()
    {
        $medications = Medication::find($this->uid);
        $medications->delete = 1;
        $medications->save();
        $this->emit('delete');
        $message = "Medication has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function changeStatus($id){
        $medications = Medication::find($id);
        $medications->active = $medications->active == 0 ? 1 : 0;
        $medications->save();
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $medications = Medication::where('name', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.medications.medications-component',compact('medications','users','doctoroffices','request','appointment'))->layout('layouts.dashboard_admin');
    }
}
