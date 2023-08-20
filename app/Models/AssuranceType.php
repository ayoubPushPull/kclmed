<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceType extends Model
{
    use HasFactory;
    protected $fillable = ['slug','nname','status','delete','created_at','updated_at'];

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }
}
