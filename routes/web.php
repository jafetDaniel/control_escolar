<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

 Route::get('/', function () {
   return view('welcome');
 });

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

//Route::get('/welcome', [LoginController::class, 'index']);
//Route::post('/welcome', [LoginController::class, 'store'])->name('login.store');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
