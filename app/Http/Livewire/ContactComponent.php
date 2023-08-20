<?php

namespace App\Http\Livewire;
use Illuminate\Support\Str;
use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{

    public $slug,$nameContact,$subjectContact,$emailContact,$phoneContact,$message,$successMessage=''; 

    public function submitForm()
    {

       // $this->validate();

       $validatedData = $this->validate([
        'nameContact' => 'required',
        'subjectContact' => 'required',
        'emailContact' => 'required',
        'phoneContact' => 'required',
        'message' => 'required', 

    ]);
        $contact = Contact::create([

            'slug' => Str::of($this->nameContact)->slug(),
            'nameContact' => $this->nameContact,
            'subjectContact' => $this->subjectContact,
            'emailContact' => $this->emailContact,
            'phoneContact' => $this->phoneContact,
            'message' => $this->message,
            
        ]);
          session()->flash('success_message', 'Message has been successfully Created');
        return redirect()->route('landing-contact');
    }

   
    public function render()
    {  $contact = Contact::where('delete', 0)->get();
        return view('livewire.contact-component',compact('contact'))->layout('layouts.landing');
    }
}
