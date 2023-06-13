<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CargaController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $student = DB::table('students')
                   ->join('careers', 'students.career_id', '=', 'careers.id')
                   ->join('semesters', 'students.semester_id', '=', 'semesters.id')
                   ->select('students.*', 'careers.name AS career_name', 'semesters.name AS semester_name')
                   ->where('user_id', $id)->first();

        return view('students_pages.carga', ['student'=> $student]); 
    }
}
