<?php

namespace App\Http\Livewire;

use App\Models\CabinetType;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Request as Requests;
use Illuminate\Support\Str;

class RegisterCabinetComponent extends Component
{

    public $currentStep = 1, $name, $email, $phone, $code_doctor, $fname, $lname, $cin, $successMessage = '', $address, $city, $state, $zipcode;
    public $name_cabinet, $phone_cabinet, $email_cabinet, $type_id, $plan_id, $address_cabinet;

    /** 
     * Write code on Method
     *
     * @return response()
     */




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

    /**
     * Write code on Method
     *
     * @return response()
     */
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

    /**
     * Write code on Method
     *
     * @return response()
     */
    //

    /*
   
     /**
      * store the user inputted post data in the posts table
      * @return void
      */


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

        $this->clearForm();
        session()->flash('success_message', 'personal has been successfully Created');
        return redirect()->route('landing-home');
    }

    /** 
     * 
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->name = '';
        $this->email = '';
    }

    public function render()
    {
        $types = CabinetType::all();
        $plans = Plan::all();
        return view('livewire.register-cabinet-component', compact('types', 'plans'))->layout('layouts.guest');
    }
}
