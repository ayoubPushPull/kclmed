<?php

namespace App\Http\Livewire\Admin\MedicalBackgrounds;
use App\Models\MedicalBackground as MedicalBackgrounds;
use App\Models\MedicalBackgroundCategory;
use Illuminate\Support\Str;
use Livewire\Component;

class AddMedicalBackgroundsComponent extends Component
{
    
    public $successMessage = '',$name,$description,$category_id,$status;
 
    public function submitForm()
    {

        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);


        MedicalBackgrounds::create([

           'slug' => Str::of($this->name)->slug(),
            'name' => $this->name,
            'description' => $this->description,
            'category_id' => $this->category_id,     
        ]);
 
        session()->flash('success_message', 'Admin has been successfully Created');
        return redirect()->route('admin-medicalbackgrounds');

      
    }
 
    public function render()
    {
        $medicalbackgroundcategory= MedicalBackgroundCategory::all();
        return view('livewire.admin.medical-backgrounds.add-medical-backgrounds-component',compact('medicalbackgroundcategory'))->layout('layouts.dashboard_admin');
    } 
}
