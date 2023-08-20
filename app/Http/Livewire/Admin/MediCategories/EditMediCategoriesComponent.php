<?php

namespace App\Http\Livewire\Admin\MediCategories;

use App\Models\MediCategory;
use App\Models\MedicationCategory;
use Livewire\Component;

class EditMediCategoriesComponent extends Component
{
    public $medcategorie,$name, $description, $successMessage = '' ;

    public function mount($slug)
    {
        $this->medcategorie = MedicationCategory::where('slug', $slug)->first();
        $this->name = $this->medcategorie->name;
        $this->description = $this->medcategorie->description;
     
    }

    public function update()
    {
         
        $medcategorie = MedicationCategory::find($this->medcategorie->id);
        $medcategorie->name = $this->name;
        $medcategorie->description = $this->description;
        $medcategorie->save();
        $this->emit('update');
        session()->flash('success_message', 'Medication Categorie has been successfully Created');
        return redirect()->route('admin-medicategories');

    }

    public function render()
    {
        return view('livewire.admin.medi-categories.edit-medi-categories-component')->layout('layouts.dashboard_admin');
    }
}
