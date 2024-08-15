<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StuBeca
 *
 * @property $id
 * @property $Student_id
 * @property $Beca_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Beca $beca
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class StuBeca extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Student_id', 'Beca_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function beca()
    {
        return $this->belongsTo(\App\Models\Beca::class, 'Beca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(\App\Models\Student::class, 'Student_id', 'id');
    }
    
}
