<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;
    protected $fillable = ['slug','num_seance','acte_seance','prix_total','is_pay','status','delete','patient_id','cabinet_id','created_at','updated_at'];
   
   
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function doctorOffice()
    {
        return $this->belongsTo(DoctorOffice::class, 'cabinet_id');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

}
