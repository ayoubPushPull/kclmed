<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'name',
        'description',
        'isActive',
        'delete',
        'created_at',
        'updated_at',
    ];

 
    public function user()
    {
        return $this->hasMany(User::class);
    }

}
