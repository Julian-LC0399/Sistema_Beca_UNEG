<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Campus
 *
 * @property $id
 * @property $Name
 * @property $Address
 * @property $created_at
 * @property $updated_at
 *
 * @property CareeCampus[] $careeCampuses
 * @property StuCampus[] $stuCampuses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Campus extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Name', 'Address'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careeCampuses()
    {
        return $this->hasMany(\App\Models\CareeCampus::class, 'id', 'Campus_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stuCampuses()
    {
        return $this->hasMany(\App\Models\StuCampus::class, 'id', 'Campus_id');
    }
    
}
