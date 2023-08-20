<?php

namespace App\Http\Livewire\Admin\DoctorOffices;

use App\Models\Appointment;
use App\Models\DoctorOffice;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class DoctorOfficesComponent extends Component
{

    public $uid;
    public $searchTerm;

    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    { 
        $doctoroffices = DoctorOffice::find($this->uid);
        $doctoroffices->delete = 1;
        $doctoroffices->save();
        $message = "Doctor office has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function changeStatus($id){
        $doctoroffices = DoctorOffice::find($id);
        $doctoroffices->status = $doctoroffices->status == 0 ? 1 : 0;
        $doctoroffices->save();

    }
    public function render()
    {
       // $doctoroffices = DoctorOffice::all();
        $searchTerm = '%' . $this->searchTerm . '%';
        $doctoroffices = DoctorOffice::where('name_cabinet', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.doctor-offices.doctor-offices-component', compact('users','doctoroffices','request','appointment'))->layout('layouts.dashboard_admin');
    }
}