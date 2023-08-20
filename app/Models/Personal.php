<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'slug', 'lname', 'fname', 'gender', 'date_birth', 'cin', 'phone_personel', 'email_personel', 'state', 'code_doctor', 'city', 'zipcode', 'address', 'profession', 'facebook', 'instagram', 'linkedin', 'twitter', 'date_embauche', 'salaire', 'has_account', 'active', 'delete', 'cabinet_id', 'created_at', 'updated_at'];


    public function doctorOffice()
    {
        return $this->belongsTo(DoctorOffice::class, 'cabinet_id');
    }
  
    public function user()
    {
        return $this->hasMany(User::class);
    }
    
}
