<?php

namespace App\Http\Livewire\Cabinet\Personals;

use App\Models\DoctorOffice;
use App\Models\Personal;
use Livewire\Component;
use Illuminate\Support\Str;

class AddPersonalsComponent extends Component
{
    

    public $lname, $fname, $gender, $date_birth, $cin, $phone_personel, $email_personel, $state, $code_doctor, $city, $zipcode, $address, $profession, $facebook, $instagram, $linkedin, $twitter, $date_embauche, $salaire, $cabinet_id, $successMessage = '' ;
  
    protected $rules = [
        'fname' => 'required',
        'lname' => 'required',
        'gender' => 'required',
        'date_birth' => 'required',
        'cin' => 'required',
        'phone_personel' => 'required',
        'email_personel' => 'required',
        'state' => 'required',
        'code_doctor' => 'required',
        'city' => 'required',
        'zipcode' => 'required',
        'address' => 'required',
        'profession' => 'required',
        'facebook' => 'required',
        'instagram' => 'required',
        'twitter' => 'required',
        'linkedin' => 'required',
        'date_embauche'=>'required',
        'salaire'=>'required',
        'cabinet_id'=>'required',
       
    ];



    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'date_birth' => 'required',
            'cin' => 'required',
            'phone_personel' => 'required',
            'email_personel' => 'required',
            'state' => 'required',
            'code_doctor' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'address' => 'required',
            'profession' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'date_embauche'=>'required',
            'salaire'=>'required',
            'cabinet_id'=>'required',
         

        ]);


        $personal = Personal::create([

        'slug' => Str::of($this->fname)->slug(),
        'fname' =>$this->fname,
        'lname' =>$this->lname,
        'gender' =>$this->gender,
        'date_birth' =>$this->date_birth,
        'cin' =>$this->cin,
        'phone_personel'=>$this->phone_personel,
        'email_personel' =>$this->email_personel,
        'state' =>$this->state,
        'code_doctor' =>$this->code_doctor,
        'city' =>$this->city,
        'zipcode' =>$this->zipcode,
        'address' =>$this->address,
        'profession'=>$this->profession,
        'facebook' =>$this->facebook,
        'instagram' =>$this->instagram,
        'twitter' =>$this->twitter,
        'linkedin' =>$this->linkedin,
        'date_embauche'=>$this->date_embauche,
        'salaire'=>$this->salaire,
        'cabinet_id'=>$this->cabinet_id,
      
         
        ]);

        session()->flash('success_message', 'Personal has been successfully Created');
        return redirect()->route('cabinet-personals');

      
    }
 
    public function render()
    {
        $personal= Personal::all();
        $doctorOffice=DoctorOffice::all();
        return view('livewire.cabinet.personals.add-personals-component',compact('personal','doctorOffice'))->layout('layouts.dashboard_user');
    }
}
