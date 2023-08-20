<?php

namespace App\Http\Livewire\Admin\MedicalBackgroundCategories;

use App\Models\MedicalBackgroundCategory;
use Livewire\Component;

class ShowMedicalBackgroundCategoriesComponent extends Component
{
    public $medicalbackgroundcategory;

    public function mount($slug)
    {
        $this->medicalbackgroundcategory = MedicalBackgroundCategory::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.admin.medical-background-categories.show-medical-background-categories-component')->layout('layouts.dashboard_admin');
    }
}
