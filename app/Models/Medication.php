<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'reference_no','name','description','photo_medicament','price','producing_company','prescription','forme','active','status','type', 'delete','categorie_id', 'created_at', 'updated_at'];
   
    public function medicationcat()
    {
        return $this->belongsTo(MedicationCategory::class, 'categorie_id');
    }

}
