<?php

namespace App\Http\Livewire\Cabinet\MedicationCategories;

use Livewire\Component;
use App\Models\MedicationCategory;

class ShowMedicationCategoriesComponent extends Component
{
    public $medcategorie;

    public function mount($slug)
    {
        $this->medcategorie = MedicationCategory::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.cabinet.medication-categories.show-medication-categories-component')->layout('layouts.dashboard_user');
    }
}
