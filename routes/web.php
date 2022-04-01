<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/newlogin', function () {
//   return view('login');
// });

// Route::get('/newregister', function () {
//   return view('register');
// });

// Route::get('/reset', function () {
//   return view('auth/passwords/email');
// });

Auth::routes();
// Route::view('/register', 'register')->name('register');

Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');

Route::get('/tv', 'TvController@index')->name('tv.index');
Route::get('/tv/{id}', 'TvController@show')->name('tv.show');

Route::get('/actors', 'ActorsController@index')->name('actors.index');
Route::get('/actors/page/{page?}', 'ActorsController@index');

Route::get('/actors/{id}', 'ActorsController@show')->name('actors.show');

Route::get('/movies/create', [MoviesController::class, 'create'])->name('movies.create');
Route::post('/movies/create', [MoviesController::class, 'store'])->name('movies.store');



Route::get('/home', 'HomeController@index')->name('home');
