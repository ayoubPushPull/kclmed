<?php

namespace App\Http\Livewire\Cabinet\Seances;

use App\Models\DoctorOffice;
use App\Models\Patient;
use App\Models\Seance;
use Livewire\Component;
use Illuminate\Support\Str;

class AddSeancesComponent extends Component
{
      

    public 	$num_seance,$acte_seance,$prix_total,$patient_id,$cabinet_id,$successMessage = '' ;
  
    protected $rules = [
        'num_seance' => 'required',
        'acte_seance' => 'required',
        'prix_total' => 'required',
        'patient_id' => 'required',
        'cabinet_id' => 'required',
       
    ];



    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'num_seance' => 'required',
            'acte_seance' => 'required',
            'prix_total' => 'required',
            'patient_id' => 'required',
            'cabinet_id' => 'required',
         

        ]);


        $seance = Seance::create([

            'slug' => Str::of($this->num_seance)->slug(),
            'num_seance' => $this->num_seance,
            'acte_seance' => $this->acte_seance,
            'prix_total' => $this->prix_total,
            'patient_id' => $this->patient_id,
            'cabinet_id' => $this->cabinet_id,
      
         
        ]);

       
    session()->flash('success_message', 'Session has been successfully Created');
    return redirect()->route('cabinet-sessions');

      
    }
 
    public function render()
    {
        $patient=Patient::all();
        $cabinet=DoctorOffice::all();
        return view('livewire.cabinet.seances.add-seances-component',compact('patient','cabinet'))->layout('layouts.dashboard_user');
    }
}
