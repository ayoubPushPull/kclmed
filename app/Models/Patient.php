<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['slug','lname','fname','gender','date_birth','cin','code_assur','phone','age','address','profession','cabinet_id','type_assur_id','status','active','delete','created_at','updated_at'];

    public function typeAssurance()
    {
        return $this->belongsTo(AssuranceType::class, 'type_assur_id');
    }

    public function doctorOffice()
    {
        return $this->belongsTo(DoctorOffice::class, 'cabinet_id');
    }

    public function appointmentCabinet()
    {
        return $this->hasMany(AppointmentCabinet::class);
    }

    public function seance()
    {
        return $this->hasMany(Seance::class);
    }

    public function arrangment()
    {
        return $this->hasMany(Arrangement::class);
    }

    public function payment()
    {
        return $this->hasMany(payment::class);
    }
}
