<?php

namespace App\Http\Livewire\Admin\CabinetTypes;

use App\Models\CabinetType;
use Livewire\Component;

class EditCabinetTypesComponent extends Component
{

    public $name,$cabinettype,$status, $slug;

    public function mount($slug)
    {
        $this->cabinettype = CabinetType::where('slug', $slug)->first();
        $this->name = $this->cabinettype->name;
      
    }

    public function update()
    {

        $cabinettype = CabinetType::find($this->cabinettype->id);
        $cabinettype->name = $this->name;
        $cabinettype->save();
        $this->emit('update');
        
        session()->flash('success_message', 'Admin has been successfully Created');
        return redirect()->route('admin-cabinettypes');
    }
    
    public function render()
    {
        return view('livewire.admin.cabinet-types.edit-cabinet-types-component')->layout('layouts.dashboard_admin');
    }
}
