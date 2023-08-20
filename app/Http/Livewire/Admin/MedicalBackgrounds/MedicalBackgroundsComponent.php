<?php

namespace App\Http\Livewire\Admin\MedicalBackgrounds;

use App\Models\Appointment;
use App\Models\DoctorOffice;
use App\Models\MedicalBackground;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class MedicalBackgroundsComponent extends Component
{
    public $uid ;
    public $searchTerm;
  
    public function confirmDelete($id)
    { 
        $this->uid = $id;
    }
    public function delete()
    { 
        $medicalbackgrounds = MedicalBackground::find($this->uid);
        $medicalbackgrounds->delete = 1;
        $medicalbackgrounds->save();
        $this->emit('delete');
        $message = "Medical Background has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function changeStatus($id){
        $medicalbackgrounds = MedicalBackground::find($id);
        $medicalbackgrounds->active = $medicalbackgrounds->active == 0 ? 1 : 0;
        $medicalbackgrounds->save();

    }
    
    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $medicalbackgrounds = MedicalBackground::where('name', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.medical-backgrounds.medical-backgrounds-component',compact('medicalbackgrounds','users','doctoroffices','request','appointment'))->layout('layouts.dashboard_admin');
    }
}
