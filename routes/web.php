<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;

use App\Http\Controllers\Students\CalificacionesController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\GroupsStudentController;
use App\Http\Controllers\GroupsTeacherController;
 Route::get('/', function () {
   return view('welcome');
 });
 Route::get('/admin', function () {
  return view('welcome_admin');
});
Route::get('/home_admin', function () {
  return view('home_admin');
});

Auth::routes(); //todas las rutas de autenticacion

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('calificaciones', [CalificacionesController::class, 'index'])->name('calificaciones.student')->middleware('auth');
Route::get('carga', [CargaController::class, 'index'])->name('carga.student')->middleware('auth');

Route::resource('students', StudentController::class); //crud student
Route::resource('courses', CourseController::class); //crud courses
Route::resource('groups', GroupController::class); //crud groups
Route::resource('careers', CareerController::class);
Route::resource('semesters', SemesterController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('users', UserController::class);
Route::resource('periods', PeriodController::class);
Route::resource('groups-student', GroupsStudentController::class);
Route::resource('groups-teacher', GroupsTeacherController::class);

//Route::get('/welcome', [LoginController::class, 'index']);
//Route::post('/welcome', [LoginController::class, 'store'])->name('login.store');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


