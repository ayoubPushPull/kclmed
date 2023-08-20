<?php

namespace App\Http\Livewire\Cabinet\Payments;

use App\Models\DoctorOffice;
use App\Models\Patient;
use App\Models\Payment;
use App\Models\Seance;
use Livewire\Component;

class EditPaymentsComponent extends Component
{
    public $prix_payé,$prix_reste,$seance_id,$patient_id,$cabinet_id;
    public $payment;

    public function mount($slug)
    {
        $this->payment = Payment::where('slug', $slug)->first();
        $this->prix_payé = $this->payment->prix_payé;
        $this->prix_reste = $this->payment->prix_reste;
        $this->seance_id = $this->payment->seance_id;
        $this->patient_id = $this->payment->patient_id;
        $this->cabinet_id = $this->payment->cabinet_id;
    }
    public function update()
    {

        $payment= Payment::find($this->payment->id);
        $payment->prix_payé = $this->prix_payé;
        $payment->prix_reste = $this->prix_reste;
        $payment->seance_id = $this->seance_id;
        $payment->patient_id = $this->patient_id;
        $payment->cabinet_id = $this->cabinet_id;
        $payment->save();
        $this->emit('update');   
        session()->flash('success_message', 'Payment has been update successfully');
        return redirect()->route('cabinet-payments');
    }
    public function render()
    {
        $patient=Patient::all();
        $cabinet=DoctorOffice::all();
        $seance=Seance::all();
        return view('livewire.cabinet.payments.edit-payments-component',compact('patient','cabinet','seance'))->layout('layouts.dashboard_user');
    }
}
