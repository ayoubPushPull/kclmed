<?php

namespace App\Http\Livewire\Cabinet\Arrangements;

use App\Models\Arrangement;
use App\Models\Patient;
use Livewire\Component;

class EditArrangementsComponent extends Component
{
    public $patient_id;
    public $arrangement;

    public function mount($slug)
    {
        $this->arrangement =Arrangement::where('slug', $slug)->first();
        $this->patient_id = $this->arrangement->patient_id;
    }

    public function update()
    {

        $arrangement= Arrangement::find($this->arrangement->id);
        $arrangement->patient_id = $this->patient_id;
        $arrangement->save();
        $this->emit('update');   
        session()->flash('success_message', 'Arrangement has been update successfully');
        return redirect()->route('cabinet-arrangements');
    }

    public function render()
    {
        $patient=Patient::all();
        return view('livewire.cabinet.arrangements.edit-arrangements-component',compact('patient'))->layout('layouts.dashboard_user');
    }
}
