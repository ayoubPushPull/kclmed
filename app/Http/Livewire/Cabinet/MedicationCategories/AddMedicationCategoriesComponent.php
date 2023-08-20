<?php

namespace App\Http\Livewire\Cabinet\MedicationCategories;

use App\Models\MedicationCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class AddMedicationCategoriesComponent extends Component
{
     

    public $name, $description, $successMessage = '' ;
  
    protected $rules = [
        'name' => 'required',
        'description' => 'required', 
    ];

 

    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required', 

        ]);


        $medcategorie =MedicationCategory::create([

            'slug' => Str::of($this->name)->slug(),
            'name' =>$this->name,
            'description' => $this->description, 
        ]);

        session()->flash('success_message', 'Medication Categorie has been successfully Created');
        return redirect()->route('cabinet-medicationcategories');

      
    }
 
    public function render()
    {
        return view('livewire.cabinet.medication-categories.add-medication-categories-component')->layout('layouts.dashboard_user');
    }
}
