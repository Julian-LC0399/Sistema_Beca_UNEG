<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Institution
 *
 * @property $id
 * @property $Name
 * @property $Phone
 * @property $Email
 * @property $created_at
 * @property $updated_at
 *
 * @property Beca[] $becas
 * @property Campus[] $campuses
 * @property Career[] $careers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Institution extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Name', 'Phone', 'Email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function becas()
    {
        return $this->hasMany(\App\Models\Beca::class, 'id', 'Institution_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function campuses()
    {
        return $this->hasMany(\App\Models\Campus::class, 'id', 'Institution_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careers()
    {
        return $this->hasMany(\App\Models\Career::class, 'id', 'Institution_id');
    }
    
}
