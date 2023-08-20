<?php

namespace App\Http\Livewire\Cabinet\ExpenseCategories;

use App\Models\ExpenseCategorie;
use Livewire\Component;
use Illuminate\Support\Str;

class AddExpenseCategoriesComponent extends Component
{
     

    public $reference_no, $code ,$name , $successMessage = '' ;
  
    protected $rules = [
        'reference_no' => 'required',
        'code' => 'required',
        'name' => 'required',   
    ];



    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'reference_no' => 'required',
            'code' => 'required',
            'name' => 'required',  

        ]);

        $expcategorie =ExpenseCategorie::create([

            'slug' => Str::of($this->name)->slug(),
            'reference_no' => $this->reference_no,
            'code' => $this->code,
            'name' => $this->name, 
        ]);

        session()->flash('success_message', 'Expense Categorie has been successfully Created');
        return redirect()->route('cabinet-expensecategories');

      
    }
    public function render()
    {
        return view('livewire.cabinet.expense-categories.add-expense-categories-component')->layout('layouts.dashboard_user');
    }
}
