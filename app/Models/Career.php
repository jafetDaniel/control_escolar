<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Career
 *
 * @property $id
 * @property $name
 * @property $key
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Course[] $courses
 * @property Student[] $students
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Career extends Model
{
    
    static $rules = [
		'name' => 'required',
		'key' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','key','description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'career_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student', 'career_id', 'id');
    }
    

}
