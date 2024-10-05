<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Beca
 *
 * @property $id
 * @property $Type
 * @property $created_at
 * @property $updated_at
 *
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
    protected $fillable = ['Type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stuBecas()
    {
        return $this->hasMany(\App\Models\StuBeca::class, 'id', 'Beca_id');
    }
    
}
