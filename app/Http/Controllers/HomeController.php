<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); //verificar que este autentificado
    }

    public function index()
    {
        $id = auth()->user()->id;

        $role= DB::table('model_has_roles')->select('role_id')->where('model_id', $id)->first(); //obtener rol

                   if ($role->role_id == 1) {//si el rol es admin

                    return view('home_admin');

                   } else 
                   if ($role->role_id == 2){ //si el rol es student

                    $student = DB::table('students')
                    ->join('careers', 'students.career_id', '=', 'careers.id')
                    ->join('semesters', 'students.semester_id', '=', 'semesters.id')
                    ->select('students.*', 'careers.name AS career_name', 'semesters.name AS semester_name')
                    ->where('user_id', $id)->first();

                    return view('home_student', ['student'=> $student]); //pasar variabel a view
                   }

    }
}
