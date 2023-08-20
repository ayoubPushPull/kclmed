<?php

namespace App\Http\Livewire\Cabinet\Patients;

use App\Models\AssuranceType;
use App\Models\DoctorOffice;
use App\Models\Patient;
use Livewire\Component;

class EditPatientsComponent extends Component
{
    public $lname,$fname,$gender,$date_birth,$cin,$code_assur,$phone,$age;
    public $address,$profession,$cabinet_id,$type_assur_id;
    public $patient;

    public function mount($slug)
    {
        $this->patient = Patient::where('slug', $slug)->first();
        $this->lname = $this->patient->lname;
        $this->fname = $this->patient->fname;
        $this->gender = $this->patient->gender;
        $this->date_birth = $this->patient->date_birth;
        $this->cin = $this->patient->cin;
        $this->code_assur = $this->patient->code_assur;
        $this->phone = $this->patient->phone;
        $this->age = $this->patient->age;
        $this->address = $this->patient->address;
        $this->profession = $this->patient->profession;
        $this->cabinet_id = $this->patient->cabinet_id;
        $this->type_assur_id= $this->patient->type_assur_id;
    }

    public function update()
    {

        $patient= Patient::find($this->patient->id);
        $patient->lname =$this->lname;
        $patient->fname =$this->fname;
        $patient->gender =$this->gender;
        $patient->date_birth=$this->date_birth;
        $patient->cin=$this->cin;
        $patient->code_assur=$this->code_assur;
        $patient->phone=$this->phone;
        $patient->age=$this->age;
        $patient->address=$this->address;
        $patient->profession=$this->profession;
        $patient->cabinet_id=$this->cabinet_id;
        $patient->type_assur_id=$this->type_assur_id;
        $patient->save();
        $this->emit('update');   
        session()->flash('success_message', 'Patient has been update successfully');
        return redirect()->route('cabinet-patients');
    }
    public function render()
    {
        $cabinet=DoctorOffice::all();
        $assurance=AssuranceType::all();
        return view('livewire.cabinet.patients.edit-patients-component',compact('cabinet','assurance'))->layout('layouts.dashboard_user');
    }
}
