<?php

namespace App\Http\Livewire\Admin\Plans;

use App\Models\Plan as Plans;
use Illuminate\Support\Str;
use Livewire\Component;

class AddPlansComponent extends Component
{

    public $slug,$name, $successMessage = '', $subtitle, $description, $color, $price, $status;


    public function submitForm()
    {

        $validatedData = $this->validate([
            'name' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'color' => 'required',
            'price' => 'required',
        ]);

 
        $request = Plans::create([

            'slug' => Str::of($this->name)->slug(),
            'name' => $this->name,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
            'color' => $this->color,
            'price' => $this->price,



        ]);

        session()->flash('success_message', 'Plan has been successfully Created');
        return redirect()->route('admin-plans');

    }

    public function render()
    {
        return view('livewire.admin.plans.add-plans-component')->layout('layouts.dashboard_admin');
    }
}
