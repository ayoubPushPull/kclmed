<?php

namespace App\Http\Livewire\Cabinet\Patients;

use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PatientsComponent extends Component
{
    public $uid ;


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $patient = Patient::find($this->uid);
        $patient->delete = 1;
        $patient->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }




    public function render()
    {
        $patient = Patient::where('delete', 0)->where('cabinet_id',Auth::user()->personal->cabinet_id)->get();
        return view('livewire.cabinet.patients.patients-component',compact('patient'))->layout('layouts.dashboard_user');
    }
}
