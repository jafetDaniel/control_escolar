<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 *
 * @property $id
 * @property $name
 * @property $key
 * @property $credits
 * @property $semester_id
 * @property $career_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Career $career
 * @property Group[] $groups
 * @property Semester $semester
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Course extends Model
{
    
    static $rules = [
		'name' => 'required',
		'key' => 'required',
		'credits' => 'required',
		'semester_id' => 'required',
		'career_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','key','credits','semester_id','career_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function career()
    {
        return $this->hasOne('App\Models\Career', 'id', 'career_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups()
    {
        return $this->hasMany('App\Models\Group', 'course_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function semester()
    {
        return $this->hasOne('App\Models\Semester', 'id', 'semester_id');
    }
    

}
