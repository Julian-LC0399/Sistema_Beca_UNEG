<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StuCareer
 *
 * @property $id
 * @property $Student_id
 * @property $Career_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Career $career
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class StuCareer extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Student_id', 'Career_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function career()
    {
        return $this->belongsTo(\App\Models\Career::class, 'Career_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(\App\Models\Student::class, 'Student_id', 'id');
    }
    
}
