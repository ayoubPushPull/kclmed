<?php

namespace App\Http\Livewire\Admin\Medications;

use App\Models\Medication as Medications;
use App\Models\MedicationCategory;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\Component;

class AddMedicationsComponent extends Component
{
    use WithFileUploads;

    public $imagename,$successMessage = '', $reference_no, $name, $description, $photo_medicament, $price, $producing_company, $prescription, $forme, $active, $status, $type, $delete, $categorie_id, $created_at, $updated_at;



 

    protected $rules = [
        'name' => 'required',
        'reference_no' => 'required',
        'description' => 'required',
        'photo_medicament' => 'required',
        'price' => 'required',
        'producing_company' => 'required',
        'prescription' => 'required',
        'forme' => 'required',
        'type' => 'required',
        'categorie_id' => 'required',

    ];



    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'name' => 'required',
            'reference_no' => 'required',
            'description' => 'required',
            'photo_medicament' => 'required',
            'price' => 'required',
            'producing_company' => 'required',
            'prescription' => 'required',
            'forme' => 'required',
            'type' => 'required',
            'categorie_id' => 'required',


        ]);
        $imagename = Carbon::now()->timestamp . '.' . $this->photo_medicament->extension();
        $this->photo_medicament->storeAs('dashboard/assets/images/blog/',$imagename);


     Medications::create([

            'slug' => Str::of($this->name)->slug(),
            'name' => $this->name,
            'reference_no' => $this->reference_no,
            'description' => $this->description,
            'photo_medicament' =>$imagename,
            'price' => $this->price,
            'producing_company' => $this->producing_company,
            'prescription' => $this->prescription,
            'forme' => $this->forme,
            'type' => $this->type,
            'categorie_id' => $this->categorie_id,

        ]);

        session()->flash('success_message', 'Medication has been successfully Created');
        return redirect()->route('admin-medications');
        
    }

    public function render()
    { 
         $medicategory= MedicationCategory::all();
        return view('livewire.admin.medications.add-medications-component',compact('medicategory'))->layout('layouts.dashboard_admin');
    }
}
