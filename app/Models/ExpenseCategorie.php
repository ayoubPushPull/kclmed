<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategorie extends Model
{
    use HasFactory;
    protected $fillable = ['slug','reference_no','code','name','active','delete','created_at','updated_at'];

    public function expense()
    {
        return $this->hasMany(Expense::class);
    }
}
