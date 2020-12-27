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
    return view('welcome');
});
Route::get('/home', function () {
    return view('/movie/index');
}); */

Route::get('/','PageController@home')->name('index'); 
Route::get('/contact-us','PageController@contact_us')->name('contact');
Route::get('/services', 'StudentController@services')->name('services');
Route::get('/about-us','StudentController@about_us')->name('about');


