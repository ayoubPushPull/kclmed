<?php

namespace App\Http\Livewire\Cabinet\ExpenseCategories;

use App\Models\ExpenseCategorie;
use Livewire\Component;

class ShowExpenseCategoriesComponent extends Component
{
    public $expcategorie;

    public function mount($slug)
    {
        $this->expcategorie = ExpenseCategorie::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.cabinet.expense-categories.show-expense-categories-component')->layout('layouts.dashboard_user');
    }
}
