<?php

namespace App\Http\Livewire\Admin\Settings;

use App\Models\CabinetType;
use App\Models\DoctorOffice;
use App\Models\Personal;
use App\Models\Plan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SettingsComponent extends Component
{

    public $user_id,$user, $personal, $utype, $old_password, $subtitle, $password, $successMessage = '', $profil_photo_path, $type_id, $plan_id;
    public $slug, $name, $new_password, $email, $phone, $code_doctor, $fname, $lname, $cin, $address, $city, $state, $zipcode;
    public $name_cabinet, $confirme_password, $phone_cabinet, $email_cabinet, $address_cabinet, $cabinet, $role, $imagename, $email_personel, $phone_personel, $cabinet_id;


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
            $this->cin = $this->user->personal->cin;
            $this->phone_personel = $this->user->personal->phone_personel;
            $this->email_personel = $this->user->personal->email_personel;
            $this->state = $this->user->personal->state;
            $this->code_doctor= $this->user->personal->code_doctor;
            $this->city= $this->user->personal->city;
            $this->zipcode= $this->user->personal->zipcode;
            $this->address = $this->user->personal->address;
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
        $user->personal->cin=$this->cin;
        $user->personal->phone_personel=$this->phone_personel;
        $user->personal->email_personel=$this->email_personel;
        $user->personal->state=$this->state;
        $user->personal->code_doctor=$this->code_doctor;
        $user->personal->city= $this->city;
        $user->personal->zipcode=$this->zipcode;
        $user->personal->address=$this->address;
        $user->personal->cabinet_id=$this->cabinet_id;
        $user->save();
        $user->personal->save();
        $this->emit('update');   
        session()->flash('success_message', 'Personal has been update successfully');
        return redirect()->route('admin-users');
        }
    }

    public function render()
    {
        $doctorOffice = DoctorOffice::all();
        $types = CabinetType::all();
        $plans = Plan::all();
        $roles = Role::all();
        $this->user = User::where('slug', $this->user->slug)->first();
        return view('livewire.admin.settings.settings-component', compact('types', 'plans', 'roles', 'doctorOffice'))->layout('layouts.dashboard_admin');
    }
}
