<?php

namespace App\Http\Livewire\Admin\DoctorOffices;

use App\Models\CabinetType;
use App\Models\DoctorOffice;
use App\Models\Personal;
use App\Models\Plan;
use App\Models\User;
use Livewire\Component;

class EditDoctorOfficesComponent extends Component
{


    public $user,$personal,$slug,$doctoroffice, $currentStep = 1, $name, $email, $phone, $code_doctor, $fname, $lname, $cin, $successMessage = '', $address, $city, $state, $zipcode;
    public $cabinet_id,$name_cabinet,$theme_cabinet, $phone_cabinet, $email_cabinet, $type_id, $plan_id, $address_cabinet,$email_personel,$phone_personel;
           
    public function mount($slug)
    {
        $this->doctoroffice = DoctorOffice::where('slug', $slug)->first();
        $this->name_cabinet = $this->doctoroffice->name_cabinet;
        $this->email_cabinet = $this->doctoroffice->email_cabinet;
        $this->phone_cabinet = $this->doctoroffice->phone_cabinet;
        $this->address_cabinet = $this->doctoroffice->address_cabinet;
        $this->theme_cabinet = $this->doctoroffice->theme_cabinet;
        $this->type_id = $this->doctoroffice->type_id;
        $this->plan_id = $this->doctoroffice->plan_id;
  
    }

    public function update()
    {

        $doctoroffice  = DoctorOffice::find($this->doctoroffice ->id);
        $doctoroffice ->name_cabinet = $this->name_cabinet;
        $doctoroffice ->name_cabinet = $this->name_cabinet;
        $doctoroffice ->phone_cabinet = $this->phone_cabinet;
        $doctoroffice ->address_cabinet = $this->address_cabinet;
        $doctoroffice ->theme_cabinet = $this->theme_cabinet;
        $doctoroffice ->type_id = $this->type_id;
        $doctoroffice ->plan_id = $this->plan_id;
        $doctoroffice ->save();
        $this->emit('update');
        
        session()->flash('success_message', 'Doctor office has been successfully Created');
        return redirect()->route('admin-doctoroffices');
    }

    public function render()
    {
        $types = CabinetType::all();
        $plans = Plan::all();
        return view('livewire.admin.doctor-offices.edit-doctor-offices-component',compact('types', 'plans'))->layout('layouts.dashboard_admin');
    }
}
