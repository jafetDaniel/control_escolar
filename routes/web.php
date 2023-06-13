<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\HomeStudentController;
use App\Http\Controllers\Students\CalificacionesController;
use App\Http\Controllers\Students\CargaController;

 Route::get('/', function () {
   return view('welcome');
 });
 Auth::routes(); //todas las rutas de autenticacion

Route::get('home', [HomeStudentController::class, 'index'])->name('home.student');
Route::get('calificaciones', [CalificacionesController::class, 'index'])->name('calificaciones.student')->middleware('auth');
Route::get('carga', [CargaController::class, 'index'])->name('carga.student')->middleware('auth');

Route::resource('students', StudentController::class); //crud student


//Route::get('/welcome', [LoginController::class, 'index']);
//Route::post('/welcome', [LoginController::class, 'store'])->name('login.store');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


