<?php

namespace App\Http\Livewire\Cabinet\Expenses;

use App\Models\DoctorOffice;
use App\Models\Expense;
use App\Models\ExpenseCategorie;
use App\Models\User;
use Livewire\Component;

class EditExpensesComponent extends Component
{
    public 	$reference_no,$name,$amount,$note,$cabinet_id,$user_id,$id_categorie_expenses;
    public $expense;

    public function mount($slug)
    {
        $this->expense = Expense::where('slug', $slug)->first();
        $this->reference_no = $this->expense->reference_no;
        $this->name = $this->expense->name;
        $this->amount = $this->expense->amount;
        $this->note = $this->expense->note;
        $this->cabinet_id = $this->expense->cabinet_id;
        $this->user_id = $this->expense->user_id;
        $this->id_categorie_expenses = $this->expense->id_categorie_expenses;
    }

    public function update()
    {

        $expense= Expense::find($this->expense->id);
        $expense->reference_no = $this->reference_no;
        $expense->name = $this->name;
        $expense->amount = $this->amount;
        $expense->note = $this->note;
        $expense->cabinet_id = $this->cabinet_id;
        $expense->user_id = $this->user_id;
        $expense->id_categorie_expenses = $this->id_categorie_expenses;
        $expense->save();
        $this->emit('update');   
        session()->flash('success_message', 'Expense has been update successfully');
        return redirect()->route('cabinet-expenses');
    }

    public function render()
    {
        $cabinet=DoctorOffice::all();
        $user=User::all();
        $categorie=ExpenseCategorie::all();
        return view('livewire.cabinet.expenses.edit-expenses-component',compact('cabinet','user','categorie'))->layout('layouts.dashboard_user');
    }
}
