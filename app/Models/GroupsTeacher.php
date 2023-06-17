<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupsTeacher
 *
 * @property $id
 * @property $teacher_id
 * @property $group_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Group $group
 * @property Teacher $teacher
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GroupsTeacher extends Model
{
    
    static $rules = [
		'teacher_id' => 'required',
		'group_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['teacher_id','group_id'];


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
    public function teacher()
    {
        return $this->hasOne('App\Models\Teacher', 'id', 'teacher_id');
    }
    

}
