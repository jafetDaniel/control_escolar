<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupsStudent
 *
 * @property $id
 * @property $first_grade
 * @property $second_grade
 * @property $final_grade
 * @property $student_id
 * @property $group_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Group $group
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GroupsStudent extends Model
{
    
    static $rules = [
		'first_grade' => 'required',
		'second_grade' => 'required',
		'final_grade' => 'required',
		'student_id' => 'required',
		'group_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_grade','second_grade','final_grade','student_id','group_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function group()
    {
        return $this->hasOne('App\Models\Group', 'id', 'group_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }
    

}
