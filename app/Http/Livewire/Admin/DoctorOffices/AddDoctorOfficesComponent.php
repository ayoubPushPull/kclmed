<?php

namespace App\Http\Livewire\Admin\DoctorOffices;

use App\Models\CabinetType;
use App\Models\DoctorOffice as DoctorOffices;
use App\Models\Personal;
use App\Models\Plan;
use App\Models\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddDoctorOfficesComponent extends Component
{

    use WithFileUploads;


    public $slug, $currentStep = 1, $name, $email, $phone, $code_doctor, $fname, $lname, $cin, $successMessage = '', $address, $city, $state, $zipcode;
    public $name_cabinet, $phone_cabinet, $email_cabinet, $type_id, $plan_id, $address_cabinet;

    public function firstStepSubmit()
    {
        $this->validate([
            'fname' => 'required', 
            'lname' => 'required',
            'email' => 'required|email|unique:requests,lname',
            'phone' => 'required|numeric|digits:10',
            'cin' => 'required',
            'code_doctor' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required',
        ]);
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'name_cabinet' => 'required',
            'phone_cabinet' => 'required|numeric|digits:10',
            'email_cabinet' => 'required',
            'type_id' => 'required',
            'plan_id' => 'required',
            'address_cabinet' => 'required',

        ]);
        $this->currentStep = 3;
    }

    public function submitForm()
    {
        $doctoroffice = DoctorOffices::create([

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

        $this->currentStep = 1;
        session()->flash('success_message', 'Doctor office has been successfully Created');
        return redirect()->route('admin-doctoroffices');
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function render()
    {
        $types = CabinetType::all();
        $plans = Plan::all();
        return view('livewire.admin.doctor-offices.add-doctor-offices-component',compact('types', 'plans'))->layout('layouts.dashboard_admin');
    }
}
 