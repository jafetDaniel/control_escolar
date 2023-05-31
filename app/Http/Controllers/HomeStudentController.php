<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeStudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function index()
    {
        $id = auth()->user()->id;
        $student = DB::table('students')
                   ->join('careers', 'students.career_id', '=', 'careers.id')
                   ->join('semesters', 'students.semester_id', '=', 'semesters.id')
                   ->select('students.*', 'careers.name AS career_name', 'semesters.name AS semester_name')
                   ->where('user_id', $id)->first();

        return view('home_student', ['student'=> $student]);
    }
}
