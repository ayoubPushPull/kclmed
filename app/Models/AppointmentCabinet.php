<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentCabinet extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'title' , 'datetime', 'date', 'time', 'patient_cin', 'active', 'delete', 'status', 'terminer', 'patient_id', 'cabinet_id', 'created_at', 'updated_at'];
  
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function doctorOffice()
    {
        return $this->belongsTo(DoctorOffice::class, 'cabinet_id');
    }

}
