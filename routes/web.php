<?php

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

Route::get('/', [\App\Http\Controllers\Pages\PagesController::class,'homepage']);
Route::get('/dashboard', [\App\Http\Controllers\Pages\PagesController::class,'homepage'])->middleware('auth');
Route::get('/detail',function(){ return view('detail'); });
//Route::get('/dashboard',function(){ return view('dashboard'); });
Route::get('newmovie',[\App\Http\Controllers\Pages\PagesController::class,'newMoviePage'])->name('newmovie');
Route::post('/movie/new',[\App\Http\Controllers\Pages\PagesController::class,'newMovie'])->name('movie.add');
Route::get('/movies', [\App\Http\Controllers\Pages\PagesController::class,'getMovies'])->name('movies');
Route::get('/movies/{id}', [\App\Http\Controllers\Pages\PagesController::class,'getMovie']);
