<?php

namespace App\Http\Livewire\Cabinet\Expenses;

use App\Models\Expense;
use Livewire\Component;

class ShowExpensesComponent extends Component
{
    public $expense;

    public function mount($slug)
    {
        $this->expense = Expense::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.cabinet.expenses.show-expenses-component')->layout('layouts.dashboard_user');
    }
}
