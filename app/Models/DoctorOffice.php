<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorOffice extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name_cabinet', 'email_cabinet', 'phone_cabinet', 'address_cabinet', 'logo_cabinet','theme_cabinet','rdv_min','type_id','plan_id', 'status', 'delete', 'cancel', 'created_at', 'updated_at'];
	 
    
    public function typeCabinet()
    {
        return $this->belongsTo(CabinetType::class, 'type_id');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function personal()
    {
        return $this->hasMany(Personal::class);
    }

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }

    public function appointment()
    {
        return $this->hasMany(AppointmentCabinet::class);
    }

    public function seance()
    {
        return $this->hasMany(Seance::class);
    }

    public function paiement()
    {
        return $this->hasMany(paiement::class);
    }

    public function medication()
    {
        return $this->hasMany(MedicationCabinets::class);
    }

    public function account()
    {
        return $this->hasOne(CabinetAccount::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

} 
