<?php

namespace App\Http\Livewire\Cabinet\Grades;


use App\Models\Grade;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class AddGradesComponent extends Component
{
    

    public 	$title , $description, $user_id, $successMessage = '';


    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'user_id' => 'required',
    ];



    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required',
        ]);

        $grade = Grade::create([
            'slug' => Str::of($this->title)->slug(),
            'title' =>$this ->title,
            'description' => $this ->description,
            'user_id' =>$this ->user_id,
        ]);

        session()->flash('success_message', 'Grade Categorie has been successfully Created');
        return redirect()->route('cabinet-grades');
    }


    public function render()
    {
        $user=User::all();
        return view('livewire.cabinet.grades.add-grades-component',compact('user'))->layout('layouts.dashboard_user');
    }
}
