<?php

namespace App\Http\Livewire\Admin\Requests;
use App\Models\Request as Requests;
use Illuminate\Support\Str;
use Livewire\Component;

class AddRequestsComponent extends Component
{


    public $currentStep = 1, $name, $email, $phone, $code_doctor, $fname, $lname, $cin, $successMessage = '', $address, $city, $state, $zipcode;
    public $name_cabinet, $phone_cabinet, $email_cabinet, $type_id, $plan_id, $address_cabinet;


    protected $rules = [
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
        'name_cabinet' => 'required',
        'phone_cabinet' => 'required',
        'email_cabinet' => 'required',
        'type_id' => 'required',
        'plan_id' => 'required',
        'address_cabinet' => 'required',
    ];



    ////////

    public function submitForm()
    {

        $this->validate();

        $request = Requests::create([

            'slug' => Str::of($this->lname . ' ' . $this->fname)->slug(),
            'fname' => $this->fname,
            'lname' => $this->lname,
            'email' => $this->email,
            'phone' => $this->phone,
            'cin' => $this->cin,
            'code_doctor' => $this->code_doctor,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'state' => $this->state,
            'address' => $this->address,
            'name_cabinet' => $this->name_cabinet,
            'phone_cabinet' => $this->phone_cabinet,
            'email_cabinet' => $this->email_cabinet,
            'type_id' => $this->type_id,
            'plan_id' => $this->plan_id,
            'address_cabinet' => $this->address_cabinet,
        ]);

        $this->successMessage = 'Product Created Successfully.';
        $this->clearForm();
        $this->currentStep = 1;
    }




    public function render()
    {
        $plans= Requests::all();
        return view('livewire.admin.requests.add-requests-component',compact('plans'))->layout('layouts.dashboard_admin');
    }
}
