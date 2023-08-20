<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name','title','subtitle','content','photo_blog','status', 'delete', 'created_at', 'updated_at'];
    
    
}
