<?php

namespace App\Http\Livewire\Cabinet\Arrangements;

use App\Models\Arrangement;
use App\Models\Patient;
use Livewire\Component;
use Illuminate\Support\Str;

class AddArrangementsComponent extends Component
{
    

    public $patient_id, $successMessage = '';


    protected $rules = [
        'patient_id' => 'required',
    ];



    ////////

    public function submitForm()
    {

       
        $validatedData = $this->validate([
            'patient_id' => 'required',
        ]);

        $arrangement = Arrangement::create([

            'slug' => Str::of($this->patient_id)->slug(),
            'patient_id' => $this->patient_id,
        
        ]);

        session()->flash('success_message', 'Arrangement has been successfully Created');
        return redirect()->route('cabinet-arrangements');
    }


    public function render()
    {
        $patient=Patient::all();
        return view('livewire.cabinet.arrangements.add-arrangements-component',compact('patient'))->layout('layouts.dashboard_user');
    }
}
