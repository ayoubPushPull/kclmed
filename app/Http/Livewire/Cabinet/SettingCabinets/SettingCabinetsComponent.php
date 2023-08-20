<?php

namespace App\Http\Livewire\Cabinet\SettingCabinets;

use App\Models\Personal;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SettingCabinetsComponent extends Component
{
    public $user;
    public $name, $email;
    public $old_password;
    public $new_password;
    public $confirme_password;
    public  $lname, $fname, $gender, $date_birth, $cin, $phone_personel, $email_personel, $state;
    public  $code_doctor, $city, $zipcode, $address, $profession,$date_embauche, $salaire, $cabinet_id;
    public  $personal;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirme_password' => 'required|same:new_password',
        ]);
    }

    public function mount($slug)
    {
        $this->user = User::where('slug', $slug)->first();
        if($this->user->utype== 'ADM'){
            $this->name = $this->user->name;
            $this->email = $this->user->email;
         }
         else{
            $this->lname = $this->user->personal->lname;
            $this->fname = $this->user->personal->fname;
            $this->gender = $this->user->personal->gender;
            $this->date_birth = $this->user->personal->date_birth;
            $this->cin = $this->user->personal->cin;
            $this->phone_personel = $this->user->personal->phone_personel;
            $this->email_personel = $this->user->personal->email_personel;
            $this->state = $this->user->personal->state;
            $this->code_doctor= $this->user->personal->code_doctor;
            $this->city= $this->user->personal->city;
            $this->zipcode= $this->user->personal->zipcode;
            $this->address = $this->user->personal->address;
            $this->profession = $this->user->personal->profession;
            $this->date_embauche= $this->user->personal->date_embauche;
            $this->salaire= $this->user->personal->salaire;
            $this->cabinet_id = $this->user->personal->cabinet_id;

         }}

    public function change_password()
    {
        $this->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirme_password' => 'required|same:new_password',

        ]);

        $user = User::find($this->user->id);

        if (Hash::check($this->old_password, $user->password)) {
            $user->password = Hash::make($this->new_password);
            $user->save();
            $this->emit('updatepassword');
            $message = "Password has been updated successfully";
            session()->flash('success_message', $message);
        } else {
            $this->emit('updatepassword');
            $message = "Old Password does not matched";
            session()->flash('warning_message', $message);
        }
    }

    public function update()
    {

        
        $user = User::find($this->user->id);
        if($this->user->utype== 'ADM'){
        $user->name = $this->name;
        $user->save();

        $this->emit('update');
        $message = "User has been update successfully";
        session()->flash('success_message', $message);
    }
        else{
        $user->personal->lname =$this->lname;
        $user->personal->fname =$this->fname;
        $user->personal->gender =$this->gender;
        $user->personal->date_birth=$this->date_birth;
        $user->personal->cin=$this->cin;
        $user->personal->phone_personel=$this->phone_personel;
        $user->personal->email_personel=$this->email_personel;
        $user->personal->state=$this->state;
        $user->personal->code_doctor=$this->code_doctor;
        $user->personal->city= $this->city;
        $user->personal->zipcode=$this->zipcode;
        $user->personal->address=$this->address;
        $user->personal->profession=$this->profession;
        $user->personal->date_embauche=$this->date_embauche;
        $user->personal->salaire=$this->salaire;
        $user->personal->cabinet_id=$this->cabinet_id;
        $user->save();
        $user->personal->save();
        $this->emit('update');   
        session()->flash('success_message', 'Personal has been update successfully');
        }
    }
    public function render()
    {
        $this->user = User::where('slug', $this->user->slug)->first();
        return view('livewire.cabinet.setting-cabinets.setting-cabinets-component')->layout('layouts.dashboard_user');
    }
}
