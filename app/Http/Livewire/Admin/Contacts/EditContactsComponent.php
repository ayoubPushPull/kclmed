<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\Contact;
use Livewire\Component;

class EditContactsComponent extends Component
{

    public  $contact,$slug,$nameContact,$subjectContact,$emailContact,$phoneContact,$message;

    public function mount($slug)
    {
        $this->contact = Contact::where('slug', $slug)->first();
        $this->nameContact = $this->contact->nameContact;
        $this->subjectContact = $this->contact->subjectContact;
        $this->emailContact = $this->contact->emailContact;
        $this->phoneContact = $this->contact->phoneContact;
        $this->message = $this->contact->message;
    }

    public function update()
    {
         
        $contact = Contact::find($this->contact->id);
        $contact->nameContact = $this->nameContact;
        $contact->subjectContact = $this->subjectContact;
        $contact->emailContact = $this->emailContact;
        $contact->phoneContact = $this->phoneContact;
        $contact->message = $this->message;
        $contact->save();

        $this->emit('update');
        session()->flash('success_message', 'Contact has been successfully Created');
        return redirect()->route('admin-Contacts');

    }

    public function render()
    {
        return view('livewire.admin.contacts.edit-contacts-component')->layout('layouts.dashboard_admin');
    }
}
