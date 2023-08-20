<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HeaderComponent extends Component
{
    public $search;
    public $limitPerPage = 60;

    public function markAsRead($notif)
    {
        Auth::user()->unreadNotifications->where('id', $notif['id'])->markAsRead();
        redirect()->route('admin-dashboard');
    }
    public function render()
    {
        return view('livewire.header-component');
    }
}
