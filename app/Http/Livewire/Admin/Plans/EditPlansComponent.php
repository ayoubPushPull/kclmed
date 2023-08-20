<?php

namespace App\Http\Livewire\Admin\Plans;

use App\Models\Plan;
use Livewire\Component;

class EditPlansComponent extends Component
{

    
    public $plan,$slug,$name, $successMessage = '', $subtitle, $description, $color, $price, $status;

    public function mount($slug)
    {
        $this->plan = Plan::where('slug', $slug)->first();
        $this->name = $this->plan->name;
        $this->subtitle = $this->plan->subtitle;
        $this->description = $this->plan->description;
        $this->color = $this->plan->color;
        $this->price = $this->plan->price;
    }

    public function update()
    {
         
        $plan = Plan::find($this->plan->id);
        $plan->name = $this->name;
        $plan->subtitle = $this->subtitle;
        $plan->description = $this->description;
        $plan->color = $this->color;
        $plan->price = $this->price;
        $plan->save();

        $this->emit('update');
        session()->flash('success_message', 'Plan has been successfully Created');
        return redirect()->route('admin-plans');

    }

    public function render()
    {
        return view('livewire.admin.plans.edit-plans-component')->layout('layouts.dashboard_admin');
    }
}
