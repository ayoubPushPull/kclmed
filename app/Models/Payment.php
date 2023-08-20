<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['slug','prix_payé','prix_reste','status','delete','seance_id','patient_id','cabinet_id','created_at','updated_at'];    
    


    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function doctorOffice()
    {
        return $this->belongsTo(DoctorOffice::class, 'cabinet_id');
    }

    public function seance()
    {
        return $this->belongsTo(Seance::class, 'seance_id');
    }
    

}
