<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stu_career extends Model
{
    use HasFactory;
    protected $fillable = ["Student_id", "Career_id"];
}
