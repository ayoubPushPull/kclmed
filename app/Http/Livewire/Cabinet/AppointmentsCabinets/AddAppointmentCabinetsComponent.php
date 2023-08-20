<?php

namespace App\Http\Livewire\Cabinet\AppointmentsCabinets;

use App\Models\AppointmentCabinet;
use App\Models\AssuranceType;
use App\Models\DoctorOffice;
use App\Models\Patient;
use Livewire\Component;
use Illuminate\Support\Str;


class AddAppointmentCabinetsComponent extends Component
{
    public 	$slug,$title,$datetime,$date,$time,$patient_cin,$patient_id,$successMessage = '' ;
    public  $lname,$fname,$gender,$date_birth,$cin,$code_assur,$phone,$age,$address,$profession,$cabinet_id,$type_assur_id;
    protected $rules = [
        'title' => 'required',
        'datetime' => 'required',
        'date' => 'required',
        'time' => 'required',
        'patient_cin' => 'required',
        'cabinet_id' => 'required', 
        'patient_id'=> 'required',
    ];



    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'title' => 'required',
            'datetime' => 'required',
            'date' => 'required',
            'time' => 'required',
            'patient_cin' => 'required',
            'cabinet_id' => 'required', 
            'patient_id'=> 'required',
        ]);


        $request = AppointmentCabinet::create([

           'slug' => Str::of($this->title)->slug(),
            'title' => $this->title,
            'datetime' => $this->datetime,
            'date' => $this->date,
            'time' => $this->time,
            'patient_cin' => $this->patient_cin,
            'cabinet_id' => $this->cabinet_id, 
            'patient_id'=> $this-> patient_id,
      
         
        ]);

        session()->flash('success_message', 'Appoitment Cabinet has been successfully Created');
        return redirect()->route('cabinet-AppointmentCabinets');

      
    }
 
    
    ////////

    public function submitForme()
    {
        $patient = Patient::create([

            'slug' => Str::of($this->fname)->slug(),
            'lname' => $this->lname,
           'fname' => $this->fname,
           'gender' => $this->gender,
           'date_birth' => $this->date_birth,
           'cin' => $this->cin,
           'code_assur' => $this->code_assur,
           'phone' => $this->phone,
           'age'  =>  $this -> age,       
           'address' => $this->address,
           'profession' => $this->profession,
           'cabinet_id' => $this->cabinet_id,
           'type_assur_id' => $this->type_assur_id,

        ]);

        $appoitment= AppointmentCabinet::create([
            'slug' => Str::of($this->title)->slug(),
            'title' => $this->title,
            'datetime' => $this->datetime,
            'date' => $this->date,
            'time' => $this->time,
            'patient_cin' => $patient->cin,
            'patient_id'=> $patient->id,
            'cabinet_id' => $patient->cabinet_id, 
        ]);

        session()->flash('success_message', 'Appoitment Cabinet has been successfully Created');
        return redirect()->route('cabinet-AppointmentCabinets');

      
    }
    
    public function render()
    {
        $patient=Patient::all();
        $cabinet=DoctorOffice::all();
        $assurance=AssuranceType::all();
        return view('livewire.cabinet.appointments-cabinets.add-appointment-cabinets-component',compact('patient','cabinet','assurance'))->layout('layouts.dashboard_user');
    }
}
