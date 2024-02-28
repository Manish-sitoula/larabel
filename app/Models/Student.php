<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //protected $table="student" //to connect if name are different
    protected $fillable=["name","biodata","address","phone","email"];
}
