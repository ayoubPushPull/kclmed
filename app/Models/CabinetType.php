<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabinetType extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name','status', 'delete', 'created_at', 'updated_at'];
  
    public function request()
    {
        return $this->hasMany(Request::class);
    }

    public function doctorOffice()
    {
        return $this->hasMany(DoctorOffice::class);
    }  
}
