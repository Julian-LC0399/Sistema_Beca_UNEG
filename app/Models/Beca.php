<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Beca
 *
 * @property $id
 * @property $Institution_id
 * @property $Type
 * @property $created_at
 * @property $updated_at
 *
 * @property Institution $institution
 * @property StuBeca[] $stuBecas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Beca extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Institution_id', 'Type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institution()
    {
        return $this->belongsTo(\App\Models\Institution::class, 'Institution_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stuBecas()
    {
        return $this->hasMany(\App\Models\StuBeca::class, 'id', 'Beca_id');
    }
    
}
