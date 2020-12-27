<?php

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

/* Route::get('/', function () {
    return view('/OCA_academy/trainees');
}); */
Route::get('/','TraineeController@showAll')->name('trainees');
Route::get('/trainee{id}','TraineeController@showbyId')->name('trainee');

Route::get('/attend/report','TraineeController@attend')->name('attend');
 Route::resource('/posts','PostsController'); 