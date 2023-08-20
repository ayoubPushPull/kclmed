<?php

namespace App\Http\Livewire\Admin\Medications;

use App\Models\Medication;
use App\Models\MedicationCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditMedicationsComponent extends Component
{
 
    /******************* phoootooo ********************/

    public  $medication,$imagename,$successMessage = '', $reference_no, $name, $description, $photo_medicament, $price,
     $producing_company, $prescription, $forme, $active, $status, $type, $delete, $categorie_id, $created_at, $updated_at;

    use WithFileUploads;

    public function mount($slug)
    {
        $this->medication = Medication::where('slug', $slug)->first();
        $this->name = $this->medication->name;
        $this->description = $this->medication->description;
        $this->reference_no = $this->medication->reference_no;
        $this->producing_company = $this->medication->producing_company;
        $this->prescription = $this->medication->prescription;
        $this->forme = $this->medication->forme;
        $this->price = $this->medication->price;
        $this->type = $this->medication->type;
        $this->categorie_id = $this->medication->categorie_id;
        $this->photo_medicament = $this->medication->photo_medicament;
    }

    public function update()
    {
         
        $medication = Medication::find($this->medication->id);
        $medication->name = $this->name;
        $medication->description = $this->description;
        $medication->reference_no = $this->reference_no;
        $medication->producing_company = $this->producing_company;
        $medication->prescription = $this->prescription;
        $medication->forme = $this->forme;
        $medication->price = $this->price;
        $medication->type = $this->type;
        $medication->categorie_id = $this->categorie_id;
        $medication->photo_medicament = $this->photo_medicament;
        $medication->save();

        $this->emit('update');
        session()->flash('success_message', 'Medication has been successfully Created');
        return redirect()->route('admin-medications');

    }
    public function render()
    {
        $medicategory= MedicationCategory::all();
        return view('livewire.admin.medications.edit-medications-component',compact('medicategory'))->layout('layouts.dashboard_admin');
    }
}
