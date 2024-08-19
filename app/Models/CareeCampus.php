<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CareeCampus
 *
 * @property $id
 * @property $Career_id
 * @property $Campus_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Campus $campus
 * @property Career $career
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CareeCampus extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Career_id', 'Campus_id'];


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
    public function career()
    {
        return $this->belongsTo(\App\Models\Career::class, 'Career_id', 'id');
    }
    
}
