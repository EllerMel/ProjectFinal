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

// Changed route from: return view('welcome');
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', 'UserController@index')->name('admin.users.index');
        Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
    });
});

Route::resource('horses', 'HorseController');

Route::get('horses/{horse}', 'HorseController@show')->name('horse.show');

Route::resource('individuals', 'IndividualController');

Route::get('individuals/{individual}', 'IndividualController@show')->name('individual.show');

Route::resource('farm', 'FarmController');

Route::resource('lessons', 'LessonController');

Route::get('/times', 'LessonController@times');
Route::get('/days', 'LessonController@days');
Route::get('/horses', 'LessonController@horses');
Route::get('/instructors', 'LessonController@instructors');
Route::get('/students', 'LessonController@students');
Route::get('/spots', 'LessonController@spots');

Route::resource('locations', 'LocationController');
