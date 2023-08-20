<?php

namespace App\Http\Livewire\Admin\MedicalBackgrounds;

use App\Models\MedicalBackground;
use App\Models\MedicalBackgroundCategory;
use Livewire\Component;

class EditMedicalBackgroundsComponent extends Component
{
    public $medicalbackground,$successMessage = '',$name,$description,$category_id,$status;
    
    public function mount($slug)
    {
        $this->medicalbackground = MedicalBackground::where('slug', $slug)->first();
        $this->name = $this->medicalbackground->name;
        $this->description = $this->medicalbackground->description;
        $this->category_id = $this->medicalbackground->category_id;
    }

    public function update()
    {
         
        $medicalbackground = MedicalBackground::find($this->medicalbackground->id);
        $medicalbackground->name = $this->name;
        $medicalbackground->description = $this->description;
        $medicalbackground->category_id = $this->category_id;
        $medicalbackground->save();
        $this->emit('update');
        session()->flash('success_message', 'Admin has been successfully Created');
        return redirect()->route('admin-medicalbackgrounds');

    }

    public function render()
    {
        $medicalbackgroundcategory= MedicalBackgroundCategory::all();
        return view('livewire.admin.medical-backgrounds.edit-medical-backgrounds-component',compact('medicalbackgroundcategory'))->layout('layouts.dashboard_admin');
    }
}
