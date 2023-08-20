<?php

namespace App\Http\Livewire\Cabinet\MedicationCategories;

use App\Models\MedicationCategory;
use Livewire\Component;

class EditMedicationCategoriesComponent extends Component
{
    public $name, $description;
    public $medicationcat;

    public function mount($slug)
    {
        $this->medicationcat = MedicationCategory::where('slug', $slug)->first();
        $this->name = $this->medicationcat->name;
        $this->description = $this->medicationcat->description;
    }

    public function update()
    {

        $medicationcat= MedicationCategory::find($this->medicationcat->id);
        $medicationcat->name = $this->name;
        $medicationcat->description = $this->description;
        $medicationcat->save();
        $this->emit('update');   
        session()->flash('success_message', 'Medication Categorie has been update successfully');
        return redirect()->route('cabinet-medicationcategories');
    }

    public function render()
    {
        return view('livewire.cabinet.medication-categories.edit-medication-categories-component')->layout('layouts.dashboard_user');
    }
}
