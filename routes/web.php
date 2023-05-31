<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeStudentController;

 Route::get('/', function () {
   return view('welcome');
 });

Route::get('/home', [HomeStudentController::class, 'index'])->name('home.index');



Route::resource('/students', StudentController::class);

//Route::get('/welcome', [LoginController::class, 'index']);
//Route::post('/welcome', [LoginController::class, 'store'])->name('login.store');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


