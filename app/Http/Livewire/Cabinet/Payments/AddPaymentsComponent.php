<?php

namespace App\Http\Livewire\Cabinet\Payments;

use App\Models\DoctorOffice;
use App\Models\Patient;
use App\Models\Payment;
use App\Models\Seance;
use Livewire\Component;
use Illuminate\Support\Str;

class AddPaymentsComponent extends Component
{
    

    public $prix_payé,$prix_reste,$seance_id,$patient_id,$cabinet_id, $successMessage = '' ;
  
    protected $rules = [
        'prix_payé' => 'required',
        'prix_reste' => 'required',
        'seance_id' => 'required',
        'patient_id' => 'required',
        'cabinet_id' => 'required',
    
       
    ];



    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'prix_payé' => 'required',
            'prix_reste' => 'required',
            'seance_id' => 'required',
            'patient_id' => 'required',
            'cabinet_id' => 'required',

        ]);


        $payment =Payment::create([

            'slug' => Str::of($this->prix_payé)->slug(),
            'prix_payé'  => $this->prix_payé,
            'prix_reste' => $this->prix_reste,
            'seance_id'  => $this->seance_id,
            'patient_id' => $this->patient_id,
            'cabinet_id' => $this->cabinet_id,
        ]);

        session()->flash('success_message', 'Payment has been successfully Created');
        return redirect()->route('cabinet-payments');

      
    }
 
    public function render()
    {
        $patient=Patient::all();
        $cabinet=DoctorOffice::all();
        $seance=Seance::all();
        return view('livewire.cabinet.payments.add-payments-component',compact('patient','cabinet','seance'))->layout('layouts.dashboard_user');
    }
}
