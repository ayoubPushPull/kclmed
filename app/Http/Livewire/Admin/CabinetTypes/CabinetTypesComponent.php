<?php

namespace App\Http\Livewire\Admin\CabinetTypes;

use App\Models\Appointment;
use App\Models\CabinetType;
use App\Models\DoctorOffice;
use App\Models\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;

class CabinetTypesComponent extends Component
{
    public $uid;
    public $name, $successMessage = '';
    public $searchTerm;
    public function submitForm()
    {

        $this->validate([
            'name' => 'required',
        ]);

        $request = CabinetType::create([
            'slug' => Str::of($this->name)->slug(),
            'name' => $this->name,
        ]);

        $this->emit('add');
        $message = "Type has been created successfully";
        session()->flash('success_message', $message);
    }


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $cabinettype = CabinetType::find($this->uid);
        $cabinettype->delete = 1;
        $cabinettype->save();

        $message = "Type Office has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function changeStatus($id){
        $cabinettype = CabinetType::find($id);
        $cabinettype->status = $cabinettype->status == 0 ? 1 : 0;
        $cabinettype->save();

    }


    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $cabinettype = CabinetType::where('name', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.cabinet-types.cabinet-types-component', compact('cabinettype','users','doctoroffices','request','appointment'))->layout('layouts.dashboard_admin');
    }
}
