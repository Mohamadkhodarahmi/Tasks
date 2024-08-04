<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',function (){
   return view('welcome');
});

Route::get('/home', function () {
    $users=\App\Models\User::all();
    return view('home',compact('users'));
});
Route::get('/register',[\App\Http\Controllers\AuthController::class,'registerPage'])->name('register');
Route::post('/register',[\App\Http\Controllers\AuthController::class,'register'])->name('register');

Route::get('/login',[\App\Http\Controllers\AuthController::class,'loginPage'])->name('login');
Route::post('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login');
