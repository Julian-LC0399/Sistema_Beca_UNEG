<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stu_campus extends Model
{
    use HasFactory;
    protected $guarded = ["Student_id","Campus_id"];
}
