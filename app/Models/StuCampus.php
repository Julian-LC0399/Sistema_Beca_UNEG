<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StuCampus
 *
 * @property $id
 * @property $Student_id
 * @property $Campus_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Campus $campus
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class StuCampus extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Student_id', 'Campus_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function campus()
    {
        return $this->belongsTo(\App\Models\Campus::class, 'Campus_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(\App\Models\Student::class, 'Student_id', 'id');
    }
    
}
