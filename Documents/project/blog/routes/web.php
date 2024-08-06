<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

//Route::get('/', function () {
//    $posts = \App\Models\Post::all();
//    return view('welcome',compact('posts'));
//});

Auth::routes();
Route::any('/show/{post}',[PostController::class,'destroy'])->name('delete');

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home');

Route::group([], function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::resource('posts', PostController::class);
});
