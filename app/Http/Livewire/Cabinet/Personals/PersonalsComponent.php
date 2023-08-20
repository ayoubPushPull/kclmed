<?php

namespace App\Http\Livewire\Cabinet\Personals;

use App\Models\Personal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PersonalsComponent extends Component
{
    public $uid ;


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $personal=Personal::find($this->uid);
        $personal ->delete = 1;
        $personal->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }
    public function render()
    {
        $personal = Personal::where('delete', 0)->where('cabinet_id',Auth::user()->personal->cabinet_id)->get();
        return view('livewire.cabinet.personals.personals-component',compact('personal'))->layout('layouts.dashboard_user');
    }
}
