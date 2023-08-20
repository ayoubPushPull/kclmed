<?php

namespace App\Http\Livewire\Admin\Plans;

use App\Models\Appointment;
use App\Models\DoctorOffice;
use App\Models\Plan;
use App\Models\Request;
use App\Models\User;
use Livewire\Component;

class PlansComponent extends Component
{
    public $uid,$searchTerm;

  
    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $plan = Plan::find($this->uid);
        $plan->delete = 1;
        $plan->save();
        $this->emit('delete');
        $message = "Plans has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function changeStatus($id){
        $plan = Plan::find($id);
        $plan->status = $plan->status == 0 ? 1 : 0;
        $plan->save();
    }

    public function render()
    {

        $searchTerm = '%' . $this->searchTerm . '%';
        $plan = Plan::where('name', 'LIKE', $searchTerm)->where('delete', 0)->orderBy('id', 'ASC')->paginate(1000);
        $users = User::where('delete', 0)->where('utype', 'USR')->get();
        $doctoroffices = DoctorOffice::where('delete', 0)->get();
        $request = Request::where('delete', 0)->get();
        $appointment = Appointment::where('delete', 0)->get();
        return view('livewire.admin.plans.plans-component',compact('plan','users','doctoroffices','request','appointment'))->layout('layouts.dashboard_admin');
    }
}
