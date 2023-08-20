<?php

namespace App\Http\Livewire\Admin\MedicalBackgroundCategories;

use App\Models\Appointment;
use App\Models\DoctorOffice;
use App\Models\MedicalBackgroundCategory;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class MedicalBackgroundCategoriesComponent extends Component
{

     public $uid ;
     public $searchTerm;
  
    public function confirmDelete($id)
    {
        $this->uid = $id;
    } 
    public function delete()
    {
        $medicalbackgroundcategory = MedicalBackgroundCategory::find($this->uid);
        $medicalbackgroundcategory->delete = 1;
        $medicalbackgroundcategory->save();
        $this->emit('delete');
        $message = "Medical Background Category has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function changeStatus($id){
        $medicalbackgroundcategory = MedicalBackgroundCategory::find($id);
        $medicalbackgroundcategory->active = $medicalbackgroundcategory->active == 0 ? 1 : 0;
        $medicalbackgroundcategory->save();

    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $medicalbackgroundcategory = MedicalBackgroundCategory::where('name', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.medical-background-categories.medical-background-categories-component',compact('medicalbackgroundcategory','users','doctoroffices','request','appointment'))->layout('layouts.dashboard_admin');
    }
}
