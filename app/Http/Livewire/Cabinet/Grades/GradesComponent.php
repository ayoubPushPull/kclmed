<?php

namespace App\Http\Livewire\Cabinet\Grades;

use Livewire\Component;
use App\Models\Grade;
use Illuminate\Support\Facades\Auth;

class GradesComponent extends Component
{
    public $uid ;


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $grade = Grade::find($this->uid);
        $grade->delete = 1;
        $grade->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }

    public function render()
    {
        $grade = Grade::where('delete', 0)->where('user_id',Auth::user()->personal->user_id)->get();
        return view('livewire.cabinet.grades.grades-component',compact('grade'))->layout('layouts.dashboard_user');
    }
}
