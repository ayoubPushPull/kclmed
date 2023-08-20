<?php

namespace App\Http\Livewire\Admin\MediCategories;

use App\Models\Appointment;
use App\Models\DoctorOffice;
use App\Models\MediCategory;
use App\Models\MedicationCategory;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class MediCategoriesComponent extends Component
{
    public $uid,$searchTerm;


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
        $message = "Medication Category has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function changeStatus($id){
        $medcategorie = MedicationCategory::find($id);
        $medcategorie->active = $medcategorie->active == 0 ? 1 : 0;
        $medcategorie->save();

    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $medcategorie = MedicationCategory::where('name', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.medi-categories.medi-categories-component',compact('medcategorie','users','doctoroffices','request','appointment'))->layout('layouts.dashboard_admin');
    }
}
