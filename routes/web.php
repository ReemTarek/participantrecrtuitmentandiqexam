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
    return view('index');
});

Auth::routes();
Route::post('/validateadmin','AdminController@validateadmin')->name('validateadmin');
Route::post('/showcertaindata','AdminController@showcertaindata')->name('showcertaindata');
Route::post('/adminlogout','AdminController@adminlogout')->name('adminlogout');
Route::get('/adminlog','AdminController@adminlog')->name('adminlog');
Route::post('/adminlogout','AdminController@adminlogout')->name('adminlogout');
Route::post('/checkexam','CheckExamController@checkexam')->name('checkexam');
Route::get('/show','UserController@index')->name('show');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/export', 'ExportExcelController@export');
Route::get('/exam','ExamController@index')->name('exam');
Route::get('/done','DoneController@index')->name('done');