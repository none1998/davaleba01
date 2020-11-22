<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware('auth');

Route::get('/movies', [\App\Http\Controllers\PostController::class, 'index'])->middleware('auth');
Route::get('/movies/create', [\App\Http\Controllers\PostController::class, 'create'])->name('movies.create')->middleware('auth');
Route::get('/movies/{movie}', [\App\Http\Controllers\PostController::class, 'show'])->middleware('auth');
Route::post('/movies/save_movie', [\App\Http\Controllers\PostController::class, 'save'])->name('movies.save')->middleware('auth');
Route::get('/movies/{movie}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('movies.edit')->middleware('auth');
Route::put('/movies/{movie}/update', [\App\Http\Controllers\PostController::class, 'update'])->name('movies.update')->middleware('auth');
Route::delete('/movies/{movie}/delete', [\App\Http\Controllers\PostController::class, 'delete'])->name('movies.delete')->middleware('auth');
Route::get('/users/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/users/post-login', [\App\Http\Controllers\LoginController::class, 'postLogin'])->name('post_login');
Route::post('/users/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');


//Route::get('/movies', function () {
//    //get movies from database
//    $movies = DB::table('movies')->get();
//    return view('movies')->with('movies', $movies);
//});
//
//
//Route::get('/form', function () {
//    return view('form');
//});
