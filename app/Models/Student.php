<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    protected $fillable = ['number_control','address','birthdate','gender','phone','average','status','photo','user_id','career_id','semester_id'];


  
    public function career()
    {
        return $this->hasOne('App\Models\Career', 'id', 'career_id');
    }
    
   
    public function semester()
    {
        return $this->hasOne('App\Models\Semester', 'id', 'semester_id');
    }
    
  
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
