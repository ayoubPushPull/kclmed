<?php

namespace App\Http\Livewire\Cabinet\MedicationCategories;

use App\Models\MedicationCategory;
use Livewire\Component;

class MedicationCategoriesComponent extends Component
{
    public $uid ;


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $medcategorie=MedicationCategory::find($this->uid);
        $medcategorie->delete = 1;
        $medcategorie->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }
    public function render()
    { 
        $medcategorie = MedicationCategory::where('delete', 0)->get();
        return view('livewire.cabinet.medication-categories.medication-categories-component',compact('medcategorie'))->layout('layouts.dashboard_user');
    }
}
