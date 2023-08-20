<?php

namespace App\Http\Livewire\Cabinet\MedicationsCabinets;

use App\Models\DoctorOffice;
use App\Models\MedicationCabinets;
use App\Models\MedicationCategory;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddMedicationCabinetsComponent extends Component
{
    use WithFileUploads;

    public 	$reference_no,$name,$description,$photo_medicament,$price,$producing_company,$prescription,$type,$forme,$categorie_id,$cabinet_id,$successMessage = '';
    public $imagename;

    protected $rules = [
        'reference_no' => 'required',
        'name' => 'required',
        'description' => 'required',
        'photo_medicament' => 'required',
        'price' => 'required',
        'producing_company' => 'required',
        'type' => 'required',
        'forme' => 'required',
        'categorie_id' => 'required',
        'cabinet_id' => 'required',
    ];



    ////////

    public function submitForm()
    {

        $validatedData = $this->validate([
            'reference_no' => 'required',
            'name' => 'required',
            'description' => 'required',
            'photo_medicament' => 'required',
            'price' => 'required',
            'producing_company' => 'required',
            'type' => 'required',
            'forme' => 'required',
            'categorie_id' => 'required',
            'cabinet_id' => 'required',
        ]);
        $imagename = Carbon::now()->timestamp . '.' . $this->photo_medicament->extension();
        $this->photo_medicament->storeAs('dashboard/assets/images/medicationCabinet/',$imagename);


        $medication = MedicationCabinets::create([

            'slug' => Str::of($this->name)->slug(),
            'reference_no' => $this->reference_no,
            'name' => $this->name,
            'description' => $this->description,
            'photo_medicament' => $imagename,
            'price' => $this->price,
            'producing_company' => $this->producing_company,
            'type' => $this->type,
            'forme' => $this->forme,
            'categorie_id' => $this->categorie_id,
            'cabinet_id' => $this->cabinet_id,
        ]);

        session()->flash('success_message', 'Medication has been successfully Created');
        return redirect()->route('cabinet-MedicationCabinets');
    }



    public function render()
    {
        $cabinet=DoctorOffice::all();
        $categorie=MedicationCategory::all();
        return view('livewire.cabinet.medications-cabinets.add-medication-cabinets-component',compact('cabinet','categorie'))->layout('layouts.dashboard_user');
    }
}
