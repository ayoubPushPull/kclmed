<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DepartmentsComponent extends Component
{
    public function render()
    {
        return view('livewire.departments-component')->layout('layouts.landing');
    }
}
