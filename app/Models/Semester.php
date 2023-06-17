<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Semester
 *
 * @property $id
 * @property $name
 * @property $key
 * @property $created_at
 * @property $updated_at
 *
 * @property Course[] $courses
 * @property Student[] $students
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Semester extends Model
{
    
    static $rules = [
		'name' => 'required',
		'key' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','key'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'semester_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student', 'semester_id', 'id');
    }
    

}
