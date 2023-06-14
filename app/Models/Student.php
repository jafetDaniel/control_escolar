<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $number_control
 * @property $address
 * @property $birthdate
 * @property $gender
 * @property $phone
 * @property $average
 * @property $status
 * @property $photo
 * @property $user_id
 * @property $career_id
 * @property $semester_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Career $career
 * @property Semester $semester
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    static $rules = [
		'number_control' => 'required',
		'address' => 'required',
		'birthdate' => 'required',
		'gender' => 'required',
		'phone' => 'required',
		'average' => 'required',
		'status' => 'required',
        'photo' => 'required',
		'user_id' => 'required',
		'career_id' => 'required',
		'semester_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['number_control','address','birthdate','gender','phone','average','status','photo','user_id','career_id','semester_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function career()
    {
        return $this->hasOne('App\Models\Career', 'id', 'career_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function semester()
    {
        return $this->hasOne('App\Models\Semester', 'id', 'semester_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
