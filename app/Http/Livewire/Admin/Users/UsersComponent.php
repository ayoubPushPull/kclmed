<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Appointment;
use App\Models\DoctorOffice;
use App\Models\Request;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class UsersComponent extends Component
{
     public $searchTerm;
    public $userActive;
    public $userInactive;
    public $uid;


 
    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $users = User::find($this->uid);
        $users->delete = 1;
        $users->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('danger_message', $message);
    }

    public function changeStatus($id){
        $user = User::find($id);
        $user->status = $user->status == 0 ? 1 : 0;
        $user->save();

    }
    use WithPagination;

    public function render()
    {

        $searchTerm = '%' . $this->searchTerm . '%';
        $users = User::where('name', 'LIKE', $searchTerm)->where('delete', 0)->where('utype', 'USR')
            ->orderBy('id', 'ASC')->paginate(1000);
            $users = User::where('delete', 0)->where('utype', 'USR')->get();
            $doctoroffices = DoctorOffice::where('delete', 0)->get();
            $request = Request::where('delete', 0)->get();
            $appointment = Appointment::where('delete', 0)->get();
            return view('livewire.admin.users.users-component', compact('users','doctoroffices','request','appointment'))->layout('layouts.dashboard_admin');
    }
}
