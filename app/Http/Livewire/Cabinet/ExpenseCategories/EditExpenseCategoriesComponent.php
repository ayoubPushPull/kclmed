<?php

namespace App\Http\Livewire\Cabinet\ExpenseCategories;

use App\Models\ExpenseCategorie;
use Livewire\Component;

class EditExpenseCategoriesComponent extends Component
{
    public 	$reference_no, $code ,$name ;
    public $expensecat;

    public function mount($slug)
    {
        $this->expensecat = ExpenseCategorie::where('slug', $slug)->first();
        $this->reference_no = $this->expensecat->reference_no;
        $this->code=$this->expensecat->code;
        $this->name = $this->expensecat->name;
    }

    public function update()
    {

        $expensecat= ExpenseCategorie::find($this->expensecat->id);
        $expensecat->reference_no = $this->reference_no;
        $expensecat->code=$this->code;
        $expensecat->name = $this->name;
        $expensecat->save();
        $this->emit('update');   
        session()->flash('success_message', 'Expense Categorie has been update successfully');
        return redirect()->route('cabinet-expensecategories');
    }
    public function render()
    {
        return view('livewire.cabinet.expense-categories.edit-expense-categories-component')->layout('layouts.dashboard_user');
    }
}
