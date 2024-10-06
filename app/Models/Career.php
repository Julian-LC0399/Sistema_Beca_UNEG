<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Career
 *
 * @property $id
 * @property $Name
 * @property $created_at
 * @property $updated_at
 *
 * @property CareeCampus[] $careeCampuses
 * @property StuCareer[] $stuCareers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Career extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careeCampuses()
    {
        return $this->hasMany(\App\Models\CareeCampus::class, 'id', 'Career_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stuCareers()
    {
        return $this->hasMany(\App\Models\StuCareer::class, 'id', 'Career_id');
    }
    
}
