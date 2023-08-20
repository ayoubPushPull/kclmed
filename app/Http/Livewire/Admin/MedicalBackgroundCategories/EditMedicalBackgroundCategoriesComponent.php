<?php

namespace App\Http\Livewire\Admin\MedicalBackgroundCategories;

use App\Models\MedicalBackgroundCategory;
use Livewire\Component;

class EditMedicalBackgroundCategoriesComponent extends Component
{
    public $medicalbackgroundcategory,$name, $description, $successMessage = '' ;

    public function mount($slug)
    {
        $this->medicalbackgroundcategory = MedicalBackgroundCategory::where('slug', $slug)->first();
        $this->name = $this->medicalbackgroundcategory->name;
        $this->description = $this->medicalbackgroundcategory->description;

    }

    public function update()
    {
         
        $medicalbackgroundcategory = MedicalBackgroundCategory::find($this->medicalbackgroundcategory->id);
        $medicalbackgroundcategory->name = $this->name;
        $medicalbackgroundcategory->description = $this->description;
        $medicalbackgroundcategory->save();
        $this->emit('update');
        session()->flash('success_message', 'Medical Background Category has been successfully Created');
        return redirect()->route('admin-medicalbackgroundcategory');

    }

    public function render()
    {
        return view('livewire.admin.medical-background-categories.edit-medical-background-categories-component')->layout('layouts.dashboard_admin');
    }
}
