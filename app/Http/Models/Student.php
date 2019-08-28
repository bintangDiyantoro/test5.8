<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'nis', 'email', 'department'];
}
