<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediCategory extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name', 'description','active','delete', 'created_at',' updated_at'];




}
