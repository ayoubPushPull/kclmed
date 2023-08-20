<?php

namespace App\Http\Livewire\Cabinet\MedicationsCabinets;

use Livewire\Component;
use App\Models\MedicationCabinets;
use Illuminate\Support\Facades\Auth;

class MedicationCabinetsComponent extends Component
{
    public $uid ;


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $medication = MedicationCabinets::find($this->uid);
        $medication->delete = 1;
        $medication->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }


    public function render()
    {
        
        $medication =MedicationCabinets::where('delete', 0)->where('cabinet_id',Auth::user()->personal->cabinet_id)->get();
        return view('livewire.cabinet.medications-cabinets.medication-cabinets-component',compact('medication'))->layout('layouts.dashboard_user');
    }
}
