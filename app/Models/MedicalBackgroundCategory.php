<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalBackgroundCategory extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name','description','active ', 'delete', 'created_at', 'updated_at'];
   
    public function medicalBackground()
    {
        return $this->hasMany(MedicalBackground::class);
    }
} 
 