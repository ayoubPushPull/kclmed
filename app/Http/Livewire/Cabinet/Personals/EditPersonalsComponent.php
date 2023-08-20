<?php

namespace App\Http\Livewire\Cabinet\Personals;

use App\Models\DoctorOffice;
use App\Models\Personal;
use Livewire\Component;

class EditPersonalsComponent extends Component
{
    public  $lname, $fname, $gender, $date_birth, $cin, $phone_personel, $email_personel, $state;
    public  $code_doctor, $city, $zipcode, $address, $profession, $facebook, $instagram, $linkedin;
    public  $twitter, $date_embauche, $salaire, $cabinet_id;
    public  $personal;

    public function mount($slug)
    {
        $this->personal = Personal::where('slug', $slug)->first();
        $this->lname = $this->personal->lname;
        $this->fname = $this->personal->fname;
        $this->gender = $this->personal->gender;
        $this->date_birth = $this->personal->date_birth;
        $this->cin = $this->personal->cin;
        $this->phone_personel = $this->personal->phone_personel;
        $this->email_personel = $this->personal->email_personel;
        $this->state = $this->personal->state;
        $this->code_doctor= $this->personal->code_doctor;
        $this->city= $this->personal->city;
        $this->zipcode= $this->personal->zipcode;
        $this->address = $this->personal->address;
        $this->profession = $this->personal->profession;
        $this->facebook = $this->personal->facebook;
        $this->instagram = $this->personal->instagram;
        $this->linkedin = $this->personal->linkedin;
        $this->twitter= $this->personal->twitter;
        $this->date_embauche= $this->personal->date_embauche;
        $this->salaire= $this->personal->salaire;
        $this->cabinet_id = $this->personal->cabinet_id;
    }

    public function update()
    {

        $personal= Personal::find($this->personal->id);
        $personal->lname =$this->lname;
        $personal->fname =$this->fname;
        $personal->gender =$this->gender;
        $personal->date_birth=$this->date_birth;
        $personal->cin=$this->cin;
        $personal->phone_personel=$this->phone_personel;
        $personal->email_personel=$this->email_personel;
        $personal->state=$this->state;
        $personal->code_doctor=$this->code_doctor;
        $personal->city= $this->city;
        $personal->zipcode=$this->zipcode;
        $personal->address=$this->address;
        $personal->profession=$this->profession;
        $personal->facebook= $this->facebook;
        $personal->instagram=$this->instagram;
        $personal->linkedin=$this->linkedin;
        $personal->twitter=$this->twitter;
        $personal->date_embauche=$this->date_embauche;
        $personal->salaire=$this->salaire;
        $personal->cabinet_id=$this->cabinet_id;
        $personal->save();
        $this->emit('update');   
        session()->flash('success_message', 'Personal has been update successfully');
        return redirect()->route('cabinet-personals');
    }
    public function render()
    {
        $personal= Personal::all();
        $doctorOffice=DoctorOffice::all();
        return view('livewire.cabinet.personals.edit-personals-component',compact('personal','doctorOffice'))->layout('layouts.dashboard_user');
    }
}
