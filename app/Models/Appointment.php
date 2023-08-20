<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name', 'phone', 'email', 'time', 'date', 'status', 'delete', 'cancel', 'created_at', 'updated_at'];
    		 	 	 	 	
} 
