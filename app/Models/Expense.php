<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = ['slug','reference_no','name','amount','note','active','delete','cabinet_id','user_id','id_categorie_expenses','created_at','updated_at'];
     
    public function doctorOffice()
    {
        return $this->belongsTo(DoctorOffice::class, 'cabinet_id');
    }

    public function categorie_expense()
    {
        return $this->belongsTo(ExpenseCategorie::class, 'id_categorie_expenses');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
