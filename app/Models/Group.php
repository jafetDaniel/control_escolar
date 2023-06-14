<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Group
 *
 * @property $id
 * @property $name
 * @property $key
 * @property $schedule
 * @property $course_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Course $course
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Group extends Model
{
    
    static $rules = [
		'name' => 'required',
		'key' => 'required',
		'schedule' => 'required',
		'course_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','key','schedule','course_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function course()
    {
        return $this->hasOne('App\Models\Course', 'id', 'course_id');
    }
    

}
