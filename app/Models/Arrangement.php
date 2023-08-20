<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrangement extends Model
{
    use HasFactory;
    protected $fillable = ['slug','active','delete','patient_id','created_at','updated_at'];
/*
    public function medication()
    {
       return $this->belongsToMany(MedicationCabinets::class,'ordonnance_has_medicaments');
    }
*/
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
