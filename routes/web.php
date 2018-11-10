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

// Route::get('/', function () {
//     return view('layouts.master');
// });

Route::get('/', 'HomePageController@index' )->name('home');

Route::resource('results', 'ResultsController');


//Route::get('results/update', ['middleware' => 'isAdmin', 'uses' => 'ResultsController@update']);


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('competitions', 'CompetitionsController')->middleware('isAdmin');
Route::resource('competitions_participants', 'CompetitionsParticipantsController');
Route::resource('arbiters', 'ArbitersController')->middleware('isArbiter');
Route::resource('evaluations', 'EvaluationsController');
Route::resource('users', 'UsersController')->middleware('isAdmin');
Route::get('/homepage', 'HomePageController@show' )->name('homepage');

});

//Route::get('/home', 'HomeController@index')->name('home');


// ['except'=>['index', 'show'] ]