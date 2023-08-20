<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicationCategory extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name', 'description','active','delete', 'created_at',' updated_at'];

    public function medicationcab()
    {
        return $this->hasMany(MedicationCabinets::class);
    }

    public function medication()
    {
        return $this->hasMany(Medication::class);
    }


}

