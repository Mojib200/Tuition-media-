<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guardianRequest extends Model
{
    use HasFactory;

    protected $fillable=[
'school_name','class','subjects','address','days','salary','teacher_gender','phone'
    ]
}
