<?php

namespace App\Http\Livewire\Admin\MediCategories;

use App\Models\MedicationCategory;
use Livewire\Component;
use Illuminate\Support\Str;
class AddMediCategoriesComponent extends Component
{
    
    public $name, $description, $successMessage = '' ;


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
        return redirect()->route('admin-medicategories');

      
    } 
    public function render()
    {
        return view('livewire.admin.medi-categories.add-medi-categories-component')->layout('layouts.dashboard_admin');
    }
}
