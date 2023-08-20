<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\CabinetType;
use App\Models\DoctorOffice;
use App\Models\Personal;
use App\Models\Plan;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class EditUserComponent extends Component
{

    public $user,$personal,$utype, $subtitle, $password, $successMessage = '', $profil_photo_path, $type_id, $plan_id;
    public $slug, $name, $email, $phone, $code_doctor, $fname, $lname, $cin, $address, $city, $state, $zipcode;
    public $name_cabinet, $phone_cabinet, $email_cabinet, $address_cabinet, $cabinet, $role, $imagename,$email_personel,$phone_personel,$cabinet_id;

    public function mount($slug)
    {

        $this->personal = Personal::where('slug', $slug)->first();
        $this->lname = $this->personal->lname;
        $this->fname = $this->personal->fname;
        $this->email_personel = $this->personal->email_personel;
        $this->cin = $this->personal->cin;
        $this->phone_personel = $this->personal->phone_personel;
        $this->code_doctor = $this->personal->code_doctor;
        $this->state = $this->personal->state;
        $this->city = $this->personal->city;
        $this->zipcode = $this->personal->zipcode;
        $this->address = $this->personal->address;
        $this->cabinet_id = $this->personal->cabinet_id;
        
    }


    public function update()
    {
         
        $personal = Personal::find($this->personal->id);
        $personal->lname = $this->lname;
        $personal->fname = $this->fname;
        $personal->email_personel = $this->email_personel;
        $personal->cin = $this->cin;
        $personal->phone_personel = $this->phone_personel;
        $personal->code_doctor = $this->code_doctor;
        $personal->state = $this->state;
        $personal->city = $this->city;
        $personal->zipcode = $this->zipcode;
        $personal->address = $this->address;
        $personal->cabinet_id = $this->cabinet_id;
        $personal->save();
        $this->emit('update');
        session()->flash('success_message', 'personal has been successfully Created');
        return redirect()->route('admin-users');

    }


    public function render()
    {  $doctorOffice = DoctorOffice::all();
        $types = CabinetType::all();
        $plans = Plan::all();
        $roles = Role::all();
        return view('livewire.admin.users.edit-user-component',compact('types', 'plans','roles','doctorOffice'))->layout('layouts.dashboard_admin');
    }
}
