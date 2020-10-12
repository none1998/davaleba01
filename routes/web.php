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
});

Route::get('/movies', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/movies/create', [\App\Http\Controllers\PostController::class, 'create'])->name('movies.create');
Route::get('/movies/{id}', [\App\Http\Controllers\PostController::class, 'show']);
Route::post('/movies/save_movie', [\App\Http\Controllers\PostController::class, 'save'])->name('movies.save');

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
