<?php

namespace App\Http\Livewire\Cabinet\Arrangements;

use Livewire\Component;
use App\Models\Arrangement;

class ArrangementsComponent extends Component
{
    public $uid ;


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $arrangement = Arrangement::find($this->uid);
        $arrangement->delete = 1;
        $arrangement->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }


    public function render()
    {
        $arrangement = Arrangement::where('delete', 0)->get();
        return view('livewire.cabinet.arrangements.arrangements-component',compact('arrangement'))->layout('layouts.dashboard_user');
    }
}
