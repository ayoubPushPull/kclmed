<?php

namespace App\Http\Livewire\Admin\MedicalBackgroundCategories;
use Illuminate\Support\Str;
use App\Models\MedicalBackgroundCategory;
use Livewire\Component;

class AddMedicalBackgroundCategoriesComponent extends Component
{
    public $name, $description, $successMessage = '' ;
  

    public function submitForm()
    {

        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required', 

        ]);


        $medicalbackgroundcategory = MedicalBackgroundCategory::create([

            'slug' => Str::of($this->name)->slug(),
            'name' =>$this->name,
            'description' => $this->description, 
        ]);

        session()->flash('success_message', 'Medical Background Category has been successfully Created');
        return redirect()->route('admin-medicalbackgroundcategory');

      
    }
    public function render()
    {
        return view('livewire.admin.medical-background-categories.add-medical-background-categories-component')->layout('layouts.dashboard_admin');
    }
}
