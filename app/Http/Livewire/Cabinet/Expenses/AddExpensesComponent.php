<?php

namespace App\Http\Livewire\Cabinet\Expenses;

use App\Models\DoctorOffice;
use App\Models\Expense;
use App\Models\ExpenseCategorie;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class AddExpensesComponent extends Component
{
    

    public 	$reference_no,$name,$amount,$note,$cabinet_id,$user_id,$id_categorie_expenses, $successMessage = '';

    protected $rules = [
        'reference_no' => 'required',
        'name' => 'required',
        'amount' => 'required',
        'note' => 'required',
        'cabinet_id' => 'required',
        'user_id' => 'required',
        'id_categorie_expenses' => 'required',
    ];



    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'reference_no' => 'required',
            'name' => 'required',
            'amount' => 'required',
            'note' => 'required',
            'cabinet_id' => 'required',
            'user_id' => 'required',
            'id_categorie_expenses' => 'required',
        ]);

        $request = Expense::create([

            'slug' => Str::of($this->name)->slug(),
            'reference_no' => $this->reference_no,
            'name' => $this->name,
            'amount' => $this->amount,
            'note' => $this->note,
            'cabinet_id' => $this->cabinet_id,
            'user_id' => $this->user_id,
            'id_categorie_expenses' => $this->id_categorie_expenses,
        ]);

        session()->flash('success_message', 'Expense has been successfully Created');
        return redirect()->route('cabinet-expenses');
    }


    public function render()
    {
        $cabinet=DoctorOffice::all();
        $user=User::all();
        $categorie=ExpenseCategorie::all();
        return view('livewire.cabinet.expenses.add-expenses-component',compact('cabinet','user','categorie'))->layout('layouts.dashboard_user');
    }
}
