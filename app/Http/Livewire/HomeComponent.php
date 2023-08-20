<?php

namespace App\Http\Livewire;
use Illuminate\Support\Str;
use App\Models\Appointment;
use Livewire\Component;

class HomeComponent extends Component
{
   

    public $name, $email, $phone, $time, $date, $successMessage = '' ;


    public function add()
    {

     $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'time' => 'required',
            'date' => 'required', 

        ]);


        $appointment = Appointment::create([

           'slug' => Str::of($this->name)->slug(),
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'time' => $this->time,
            'date' => $this->date,
         
        ]);
        session()->flash('success_message', 'Appointment has been successfully Created');
        return redirect()->route('landing-home');
    }
 
    public function render()
    {
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.home-component',compact('appointment'))->layout('layouts.landing');
    }
}
