<?php

namespace App\Http\Livewire\Cabinet\ExpenseCategories;

use App\Models\ExpenseCategorie;
use Livewire\Component;

class ExpenseCategoriesComponent extends Component
{
    public $uid ;


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $expcategorie=ExpenseCategorie::find($this->uid);
        $expcategorie ->delete = 1;
        $expcategorie->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }
    public function render()
    {
        $expcategorie = ExpenseCategorie::where('delete', 0)->get();
        return view('livewire.cabinet.expense-categories.expense-categories-component',compact('expcategorie'))->layout('layouts.dashboard_user');
    }
}
