<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'nameContact','subjectContact','emailContact','phoneContact','message','archive','trash','read','delete','start','created_at', 'updated_at'];

}
