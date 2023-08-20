<?php

namespace App\Http\Livewire\Cabinet\Payments;

use App\Models\Payment;
use Livewire\Component;

class ShowPaymentsComponent extends Component
{
    public $payment;

    public function mount($slug)
    {
        $this->payment = Payment::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.cabinet.payments.show-payments-component')->layout('layouts.dashboard_user');
    }
}
