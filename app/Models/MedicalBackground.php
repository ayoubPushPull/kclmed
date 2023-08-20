<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalBackground extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name','description','category_id','active ', 'delete', 'created_at', 'updated_at'];
   
    
    public function medicalBackgroundCat()
    {
        return $this->belongsTo(MedicalBackgroundCategory::class, 'category_id');
    }

} 
