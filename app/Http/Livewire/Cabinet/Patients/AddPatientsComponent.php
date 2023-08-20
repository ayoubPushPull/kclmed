<?php

namespace App\Http\Livewire\Cabinet\Patients;

use App\Models\AssuranceType;
use App\Models\DoctorOffice;
use App\Models\Patient;
use Livewire\Component;
use Illuminate\Support\str;

class AddPatientsComponent extends Component
{
    

    public $lname,$fname,$gender,$date_birth,$cin,$code_assur,$phone,$age,$address,$profession,$cabinet_id,$type_assur_id,$successMessage = '' ;
  
    protected $rules = [
        'lname' => 'required',
        'fname' => 'required',
        'gender' => 'required',
        'date_birth' => 'required',
        'cin' => 'required',
        'code_assur' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'profession' => 'required',
        'cabinet_id' => 'required',
        'type_assur_id' => 'required',
  
    ];



    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'lname' => 'required',
            'fname' => 'required',
            'gender' => 'required',
            'date_birth' => 'required',
            'cin' => 'required',
            'code_assur' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'profession' => 'required',
            'cabinet_id' => 'required',
            'type_assur_id' => 'required',
        ]);


        $patient = Patient::create([

           'slug' => Str::of($this->lname)->slug(),
           'lname' => $this->lname,
           'fname' => $this->fname,
           'gender' => $this->gender,
           'date_birth' => $this->date_birth,
           'cin' => $this->cin,
           'code_assur' => $this->code_assur,
           'phone' => $this->phone,
           'address' => $this->address,
           'profession' => $this->profession,
           'cabinet_id' => $this->cabinet_id,
           'type_assur_id' => $this->type_assur_id,
         
        ]);

        session()->flash('success_message', 'Patient has been successfully Created');
    return redirect()->route('cabinet-patients');

      
    }
 
    public function render()
    {
        $cabinet=DoctorOffice::all();
        $assurance=AssuranceType::all();
        return view('livewire.cabinet.patients.add-patients-component',compact('cabinet','assurance'))->layout('layouts.dashboard_user');
    }
}
