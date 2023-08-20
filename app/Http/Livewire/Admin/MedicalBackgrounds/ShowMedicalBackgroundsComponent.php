<?php

namespace App\Http\Livewire\Admin\MedicalBackgrounds;
use App\Models\MedicalBackground;
use Livewire\Component;

class ShowMedicalBackgroundsComponent extends Component
{

        
    public $MedicalBackground;

    public function mount($slug)
    {
        $this->MedicalBackground = MedicalBackground::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.admin.medical-backgrounds.show-medical-backgrounds-component')->layout('layouts.dashboard_admin');
    }
}
