<?php

namespace App\Http\Livewire\Cabinet\Seances;

use App\Models\Seance;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SeancesComponent extends Component
{
    public $uid ;


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $seance=Seance::find($this->uid);
        $seance ->delete = 1;
        $seance->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }

    public function render()
    {
        $seance = Seance::where('delete', 0)->where('cabinet_id',Auth::user()->personal->cabinet_id)->get();
        return view('livewire.cabinet.seances.seances-component',compact('seance'))->layout('layouts.dashboard_user');
    }
}
