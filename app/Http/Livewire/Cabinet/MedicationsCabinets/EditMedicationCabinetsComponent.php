<?php

namespace App\Http\Livewire\Cabinet\MedicationsCabinets;

use App\Models\DoctorOffice;
use App\Models\MedicationCabinets;
use App\Models\MedicationCategory;
use Livewire\Component;

class EditMedicationCabinetsComponent extends Component
{

    public $reference_no,$name,$description,$photo_medicament,$price,$producing_company,$prescription,$type,$forme,$categorie_id,$cabinet_id;
    public $medication;

    public function mount($slug)
    {
        $this->medication = MedicationCabinets::where('slug', $slug)->first();
        $this->reference_no= $this->medication->reference_no;
        $this->name = $this->medication->name;
        $this->description = $this->medication->description;
        $this->photo_medicament= $this->medication->photo_medicament;
        $this->price= $this->medication->price;
        $this->producing_company = $this->medication->producing_company;
        $this->prescription= $this->medication->prescription;
        $this->type = $this->medication->name;
        $this->forme = $this->medication->description;
        $this->categorie_id= $this->medication->categorie_id;
        $this->cabinet_id=$this->medication->cabinet_id;

    }

    public function update()
    {

        $medication= MedicationCabinets::find($this->medication->id);
        $medication->reference_no =$this->reference_no;
        $medication->name = $this->name;
        $medication->description = $this->description;
        $medication->photo_medicament=$this->photo_medicament;
        $medication->price = $this->price;
        $medication->producing_company = $this->producing_company;
        $medication->prescription =$this->prescription;
        $medication->type = $this->type;
        $medication->forme = $this->forme;
        $medication->categorie_id =$this->categorie_id;
        $medication->cabinet_id= $this->cabinet_id;
        $medication->save();
        $this->emit('update');   
        session()->flash('success_message', 'Medication Cabinet has been update successfully');
        return redirect()->route('cabinet-MedicationCabinets');
    }
    public function render()
    {
        $cabinet=DoctorOffice::all();
        $categorie=MedicationCategory::all();
        return view('livewire.cabinet.medications-cabinets.edit-medication-cabinets-component',compact('cabinet','categorie'))->layout('layouts.dashboard_user');
    }
}
