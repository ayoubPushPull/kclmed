<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name','subtitle','description','color','price','status', 'delete', 'created_at', 'updated_at'];
    
    public function doctorOffice()
    {
        return $this->hasMany(DoctorOffice::class);
    }

} 
