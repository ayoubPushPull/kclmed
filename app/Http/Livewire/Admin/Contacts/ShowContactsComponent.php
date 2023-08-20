<?php

namespace App\Http\Livewire\Admin\Contacts;
use App\Models\Contact;
use Livewire\Component;

class ShowContactsComponent extends Component
{
    public $contacts;

    public function mount($slug)
    {
        $this->contacts = Contact::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.admin.contacts.show-contacts-component')->layout('layouts.dashboard_admin');
    }
}
