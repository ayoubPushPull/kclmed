<?php

namespace App\Http\Livewire\Admin\CabinetTypes;

use App\Models\CabinetType;
use Illuminate\Support\Str;
use Livewire\Component;

class AddCabinetTypesComponent extends Component
{


    public $name,  $status, $slug;



    public function submitForm()
    {

        $this->validate([
            'name' => 'required|name|unique:doctor_offices',
        ]);

        CabinetType::create([
            'slug' => Str::of($this->name)->slug(),
            'name' => $this->name,
        ]);


        session()->flash('success_message', 'Admin has been successfully Created');
        return redirect()->route('admin-cabinettypes');
    }

    public function render()
    {
        return view('livewire.admin.cabinet-types.add-cabinet-types-component')->layout('layouts.dashboard_admin');
    }
}
