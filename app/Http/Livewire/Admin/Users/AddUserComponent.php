<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\CabinetType;
use App\Models\DoctorOffice;
use App\Models\Personal;
use App\Models\Plan;
use App\Models\Role;
use App\Models\User as Users;
use Illuminate\Support\Str;
use App\Models\User;
use App\Notifications\UserNotif;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Livewire\WithFileUploads;


class AddUserComponent extends Component
{
    use WithFileUploads;

    public $utype, $subtitle, $password, $successMessage = '', $profil_photo_path, $type_id, $plan_id;
    public $slug, $name, $email, $phone, $code_doctor, $fname, $lname, $cin, $address, $city, $state, $zipcode;
    public $name_cabinet, $phone_cabinet, $email_cabinet, $address_cabinet, $cabinet, $role, $imagename;


    public function submitForm()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'utype' => 'required',
            'profil_photo_path' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $imagename = Carbon::now()->timestamp . '.' . $this->logo_cabinet->extension();
        $this->logo_cabinet->storeAs('dashboard/assets/images/doctorOffice/', $imagename);
        $request = Users::create([

            'slug' => Str::of($this->name)->slug(),
            'name' => $this->name,
            'utype' => $this->utype,
            'profil_photo_path' => $imagename,
            'email' => $this->email,
            'password' => $this->password,


        ]);

        $this->successMessage = 'Product Created Successfully.';
    }
    /*************************** */

    public function submitForm1()
    {
        $this->validate([
            'name_cabinet' => 'required',
            'email_cabinet' => 'required',
            'phone_cabinet' => 'required',
            'address_cabinet' => 'required',
            'type_id' => 'required',
            'plan_id' => 'required',
            'fname' => 'required', 
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric|digits:10',
            'cin' => 'required',
            'code_doctor' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required',
        ]);

        $doctoroffice = DoctorOffice::create([

            'slug' => Str::of($this->name_cabinet)->slug(),
            'name_cabinet' => $this->name_cabinet,
            'email_cabinet' => $this->email_cabinet,
            'phone_cabinet' => $this->phone_cabinet,
            'address_cabinet' => $this->address_cabinet,
            'theme_cabinet' => "rouge",
            'type_id' => $this->type_id,
            'plan_id' => $this->plan_id,

        ]);

        $personal = Personal::create([
            'slug' => Str::of($this->lname . ' ' . $this->fname)->slug(),
            'lname' => $this->lname,
            'fname' => $this->fname,
            'email_personel' => $this->email,
            'cin' => $this->cin,
            'phone_personel' => $this->phone,
            'code_doctor' => $this->code_doctor,
            'state' => $this->state,
            'city' => $this->city,
            'zipcode' => $this->zipcode,
            'address' => $this->address,
            'cabinet_id' => $doctoroffice->id,
            'has_account' => 1,
        ]);

        $user = User::create([
            'slug' => Str::of($this->lname . ' ' . $this->fname)->slug(),
            'name' => $this->lname . ' ' . $this->fname,
            'email' => $this->email,
            'password' => Hash::make(123456789),
            'utype' => "USR",
            'personal_id' => $personal->id,
            'role_id' => 1,
        ]);

        session()->flash('success_message', 'Owner has been successfully Created');
        return redirect()->route('admin-users');
    }

    /*************************** */

    public function submitForm2()
    {
        $this->validate([
        'lname' =>'required',
        'fname' => 'required',
        'email' => 'required',
        'cin' =>'required',
        'phone' =>'required',
        'state' =>'required',
        'city' =>'required',
        'zipcode' => 'required',
        'address' =>'required',
        'cabinet' =>'required',
        'role' =>'required',
    ]);
        $personal = Personal::create([
            'slug' => Str::of($this->lname . ' ' . $this->fname)->slug(),
            'lname' => $this->lname,
            'fname' => $this->fname,
            'email_personel' => $this->email,
            'cin' => $this->cin,
            'phone_personel' => $this->phone,
            'state' => $this->state,
            'city' => $this->city,
            'zipcode' => $this->zipcode,
            'address' => $this->address,
            'cabinet_id' => $this->cabinet, 
            'has_account' =>0,
        ]);

        $user = User::create([
            'slug' => Str::of($this->lname . ' ' . $this->fname)->slug(),
            'name' => $this->lname . ' ' . $this->fname,
            'email' => $this->email,
            'password' => Hash::make(123456789),
            'utype' => "USR",
            'personal_id' => $personal->id,
            'role_id' => $this->role,
        ]);
        session()->flash('success_message', 'personal has been successfully Created');
        return redirect()->route('admin-users');
    }


    public function submitForm3()
    {

        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

        $user = User::create([
            'slug' => Str::of($this->name)->slug(),
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make(123456789),
            'utype' => 'ADM',
        ]);

        session()->flash('success_message', 'Admin has been successfully Created');
        return redirect()->route('admin-users');
    }

    /*************************** */
    /*public function notif()
    {
        $users = User::all();
        $user = User::find(1);
        Notification::send($users, new UserNotif($user));
    } */
    public function render()
    {
        $doctorOffice = DoctorOffice::all();
        $types = CabinetType::all();
        $plans = Plan::all();
        $roles = Role::all();
        return view('livewire.admin.users.add-user-component', compact('types', 'plans', 'doctorOffice', 'roles'))->layout('layouts.dashboard_admin');
    } 
}
