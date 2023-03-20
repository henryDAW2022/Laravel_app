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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','home')->name('home');
Route::view('acerca-de','about')->name('about');

Route::get('blog','PostController@index')->name('blog.index');
Route::get('blog/{post:slug}','PostController@show')->name('blog.show');
Route::get('blog', [App\Http\Controllers\PostController::class, 'index'])->name('blog.index');
Route::get('blog/{post:slug}', [App\Http\Controllers\PostController::class, 'show'])->name('blog.show');

Route::view('contactos','contact')->name('contact');