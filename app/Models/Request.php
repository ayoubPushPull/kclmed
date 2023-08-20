<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'lname', 'fname', 'email', 'phone', 'cin', 'code_doctor', 'state', 'city', 'zipcode', 'address', 'name_cabinet', 'phone_cabinet', 'email_cabinet', 'type_id', 'plan_id', 'address_cabinet', 'logo_cabinet', 'delete', 'status', 'created_at', 'updated_at'];
  
    public function cabinetType()
    {
        return $this->belongsTo(CabinetType::class, 'type_id');
    }

}
