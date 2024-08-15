<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $First_name
 * @property $Suname
 * @property $Identification_card
 * @property $Phone
 * @property $Room_telephone
 * @property $Email
 * @property $Semeter
 * @property $created_at
 * @property $updated_at
 *
 * @property StuBeca[] $stuBecas
 * @property StuCampus[] $stuCampuses
 * @property StuCareer[] $stuCareers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['First_name', 'Suname', 'Identification_card', 'Phone', 'Room_telephone', 'Email', 'Semeter'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stuBecas()
    {
        return $this->hasMany(\App\Models\StuBeca::class, 'id', 'Student_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stuCampuses()
    {
        return $this->hasMany(\App\Models\StuCampus::class, 'id', 'Student_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stuCareers()
    {
        return $this->hasMany(\App\Models\StuCareer::class, 'id', 'Student_id');
    }
    
}
