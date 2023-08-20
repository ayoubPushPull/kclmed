<?php

namespace App\Http\Livewire\Admin\MediCategories;

use App\Models\MedicationCategory;
use Livewire\Component;

class ShowMediCategoriesComponent extends Component
{
    public $medcategorie;

    public function mount($slug)
    {
        $this->medcategorie = MedicationCategory::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.admin.medi-categories.show-medi-categories-component')->layout('layouts.dashboard_admin');
    }
}
 