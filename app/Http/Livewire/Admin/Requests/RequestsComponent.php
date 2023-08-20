<?php

namespace App\Http\Livewire\Admin\Requests;

use App\Models\Appointment;
use App\Models\DoctorOffice;
use Livewire\Component;
use App\Models\Request;
use App\Models\User;

class RequestsComponent extends Component
{

    public $uid,$searchTerm;


    public function confirmDelete($id)
    { 
        $this->uid = $id;
    }
    public function delete()
    {
        $request = Request::find($this->uid);
        $request->delete = 1;
        $request->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }

    public function render()
    {
   
        $searchTerm = '%' . $this->searchTerm . '%';
        $request = Request::where('lname', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.requests.requests-component', compact('request','users','doctoroffices','appointment'))->layout('layouts.dashboard_admin');
    }
}
