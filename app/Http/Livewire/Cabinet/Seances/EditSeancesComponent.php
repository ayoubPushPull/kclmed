<?php

namespace App\Http\Livewire\Cabinet\Seances;

use App\Models\DoctorOffice;
use App\Models\Patient;
use App\Models\Seance;
use Livewire\Component;

class EditSeancesComponent extends Component
{
    public $num_seance,$acte_seance,$prix_total,$patient_id,$cabinet_id;
    public $seance;

    public function mount($slug)
    {
        $this->seance = Seance::where('slug', $slug)->first();
        $this->num_seance = $this->seance->num_seance;
        $this->acte_seance = $this->seance->acte_seance;
        $this->prix_total = $this->seance->prix_total;
        $this->patient_id = $this->seance->patient_id;
        $this->cabinet_id= $this->seance->cabinet_id;

    }

    public function update()
    {

        $seance= Seance::find($this->seance->id);
        $seance->num_seance = $this->num_seance;
        $seance->acte_seance = $this->acte_seance;
        $seance->prix_total = $this->prix_total;
        $seance->patient_id = $this->patient_id;
        $seance->cabinet_id = $this->cabinet_id;
        $seance->save();
        $this->emit('update');   
        session()->flash('success_message', 'Session has been update successfully');
        return redirect()->route('cabinet-sessions');
    }
    public function render()
    {
        $patient=Patient::all();
        $cabinet=DoctorOffice::all();
        return view('livewire.cabinet.seances.edit-seances-component',compact('patient','cabinet'))->layout('layouts.dashboard_user');
    }
}
