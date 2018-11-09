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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('competitions', 'CompetitionsController');
Route::resource('competitions_participants', 'CompetitionsParticipantsController');
Route::resource('arbiters', 'ArbitersController');
Route::resource('evaluations', 'EvaluationsController');
Route::resource('results', 'ResultsController');
Route::resource('users', 'UsersController');



