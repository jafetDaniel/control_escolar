<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Teacher
 *
 * @property $id
 * @property $number_control
 * @property $address
 * @property $birthdate
 * @property $gender
 * @property $phone
 * @property $status
 * @property $photo
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Teacher extends Model
{
    
    static $rules = [
		'number_control' => 'required',
		'address' => 'required',
		'birthdate' => 'required',
		'gender' => 'required',
		'phone' => 'required',
		'status' => 'required',
		'photo' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['number_control','address','birthdate','gender','phone','status','photo','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
