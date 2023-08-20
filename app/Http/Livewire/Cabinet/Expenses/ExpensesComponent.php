<?php

namespace App\Http\Livewire\Cabinet\Expenses;

use Livewire\Component;
use App\Models\Expense;
use Illuminate\Support\Facades\Auth;

class ExpensesComponent extends Component
{
    public $uid ;


    public function confirmDelete($id)
    {
        $this->uid = $id;
    }
    public function delete()
    {
        $expense = Expense::find($this->uid);
        $expense->delete = 1;
        $expense->save();
        $this->emit('delete');
        $message = "User has been deleted successfully";
        session()->flash('warning_message', $message);
    }



    public function render()
    {
        $expense = Expense::where('delete', 0)->where('cabinet_id',Auth::user()->personal->cabinet_id)->get();
        return view('livewire.cabinet.expenses.expenses-component',compact('expense'))->layout('layouts.dashboard_user');
    }
}
