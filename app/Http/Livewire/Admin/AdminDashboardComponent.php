<?php

namespace App\Http\Livewire\Admin;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\DoctorOffice;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class AdminDashboardComponent extends Component
{

    public $name;


    public function render()
    { 

        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        $contacts = Contact::where('delete', 0)->get();
        return view('livewire.admin.admin-dashboard-component',compact('users','doctoroffices','appointment','request','contacts'))->layout('layouts.dashboard_admin');
    }
}
