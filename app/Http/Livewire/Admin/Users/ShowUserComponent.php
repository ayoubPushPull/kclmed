<?php

namespace App\Http\Livewire\Admin\Users;
use App\Models\User;
use Livewire\Component;

class ShowUserComponent extends Component
{
    
    
    public $users;

    public function mount($slug)
    {
        $this->users = User::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.admin.users.show-user-component')->layout('layouts.dashboard_admin');
    }
}
