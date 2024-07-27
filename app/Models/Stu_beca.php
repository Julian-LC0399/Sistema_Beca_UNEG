<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stu_beca extends Model
{
    use HasFactory;
    protected $guarded = ["Student_id","Beca_id"];
}
