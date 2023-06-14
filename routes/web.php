<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\HomeStudentController;
use App\Http\Controllers\Students\CalificacionesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;


 Route::get('/', function () {
   return view('welcome');
 });
 Route::get('/admin', function () {
  return view('welcome_admin');
});

 Auth::routes(); //todas las rutas de autenticacion

Route::get('home', [HomeStudentController::class, 'index'])->name('home.student');
Route::get('calificaciones', [CalificacionesController::class, 'index'])->name('calificaciones.student')->middleware('auth');
Route::get('carga', [CargaController::class, 'index'])->name('carga.student')->middleware('auth');

Route::resource('students', StudentController::class); //crud student
Route::resource('courses', CourseController::class); //crud courses
Route::resource('groups', GroupController::class); //crud groups


//Route::get('/welcome', [LoginController::class, 'index']);
//Route::post('/welcome', [LoginController::class, 'store'])->name('login.store');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


