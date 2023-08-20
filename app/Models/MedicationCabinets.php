<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicationCabinets extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'reference_no','name','description','photo_medicament','price','producing_company','prescription','forme','active','status','type', 'delete', 'categorie_id' ,'cabinet_id', 'created_at', 'updated_at'];

    public function medicationcat()
    {
        return $this->belongsTo(MedicationCategory::class, 'categorie_id');
    }

    public function doctorOffice()
    {
        return $this->belongsTo(DoctorOffice::class, 'cabinet_id');
    }

    public function arrangement()
    {
        return $this->hasMany(Arrangement::class);
    }
}
