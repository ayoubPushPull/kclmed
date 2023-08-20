<?php

namespace App\Http\Livewire\Admin\Contacts;

use Livewire\Component;

class AddContactsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.contacts.add-contacts-component')->layout('layouts.dashboard_admin');
    }
} 
