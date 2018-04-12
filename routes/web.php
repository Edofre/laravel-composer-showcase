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


Route::get('fullcalendar', 'FullcalendarController@index')
    ->name('fullcalendar.index');
Route::get('fullcalendar/ajax/events', 'FullcalendarController@ajaxEvents')
    ->name('fullcalendar.ajax.events');


Route::get('fullcalendar-scheduler', 'FullcalendarSchedulerController@index')
    ->name('fullcalendar-scheduler.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
