<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;




#[Fillable('nis', 'name', 'gender', 'major', 'class')]
#[Table('students')]
class Student extends Model
{
 
}