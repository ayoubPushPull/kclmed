<?php

namespace App\Http\Livewire\Cabinet\Grades;

use App\Models\Grade;
use App\Models\User;
use Livewire\Component;

class EditGradesComponent extends Component
{
    public $title ,$description, $user_id;
    public $grade;

    public function mount($slug)
    {
        $this->grade = Grade::where('slug', $slug)->first();
        $this->title = $this->grade->title;
        $this->description=$this->grade->description;
        $this->user_id = $this->grade->user_id;
    }

    public function update()
    {

        $grade= Grade::find($this->grade->id);
        $grade->title = $this->title;
        $grade->description=$this->description;
        $grade->user_id = $this->user_id;
        $grade->save();
        $this->emit('update');   
        session()->flash('success_message', 'Grade has been update successfully');
        return redirect()->route('cabinet-grades');
    }
    public function render()
    {
        $user=User::all();
        return view('livewire.cabinet.grades.edit-grades-component',compact('user'))->layout('layouts.dashboard_user');
    }
}
