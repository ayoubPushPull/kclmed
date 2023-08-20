<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\DoctorOffice;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class ContactsComponent extends Component
{

    public $uid ;
    public $searchTerm;
  
    public function confirmDelete($id)
    {
        $this->uid = $id;
    } 
    public function delete()
    {
        $contacts = Contact::find($this->uid);
        $contacts ->delete = 1;
        $contacts ->save();
        $this->emit('delete');
        $message = "Appointment has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $contacts = Contact::where('nameContact', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.contacts.contacts-component',compact('contacts','users','doctoroffices','request','appointment'))->layout('layouts.dashboard_admin');
    }
}
