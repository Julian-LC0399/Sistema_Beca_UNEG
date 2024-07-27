<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caree_campus extends Model
{
    use HasFactory;
    protected $guarded = ["Career_id","Campus_id"];
}
