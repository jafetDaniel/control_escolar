<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Period
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property CardexStudent[] $cardexStudents
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Period extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cardexStudents()
    {
        return $this->hasMany('App\Models\CardexStudent', 'period_id', 'id');
    }
    

}
