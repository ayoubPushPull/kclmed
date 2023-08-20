<?php

namespace App\Http\Livewire\Cabinet\Grades;

use App\Models\Grade;
use Livewire\Component;

class ShowGradesComponent extends Component
{
    public $grade;

    public function mount($slug)
    {
        $this->grade = Grade::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.cabinet.grades.show-grades-component')->layout('layouts.dashboard_user');
    }
}
