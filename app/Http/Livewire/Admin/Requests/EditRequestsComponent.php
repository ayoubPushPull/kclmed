<?php

namespace App\Http\Livewire\Admin\Requests;

use Livewire\Component;

class EditRequestsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.requests.edit-requests-component')->layout('layouts.dashboard_admin');
    }
}
