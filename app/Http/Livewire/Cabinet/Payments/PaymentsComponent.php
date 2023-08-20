<?php

namespace App\Http\Livewire\Cabinet\Payments;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentsComponent extends Component
{
    public $uid ;


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $payment=Payment::find($this->uid);
        $payment ->delete = 1;
        $payment->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }

    public function render()
    {
        $payment = Payment::where('delete', 0)->where('cabinet_id',Auth::user()->personal->cabinet_id)->get();
        return view('livewire.cabinet.payments.payments-component',compact('payment'))->layout('layouts.dashboard_user');
    }
}
