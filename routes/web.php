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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //delete it!
Route::post('/post', 'PostController@store')->name('post');
Route::post('/assignment', 'AssignmentController@store')->name('assignment');
Route::get('/class', 'ClassroomController@index')->name('classroom');
Route::get('/class/create', 'ClassroomController@add')->name('classroom.create');
Route::post('/class/create', 'ClassroomController@create');
Route::get('/class/{classroom_id}', 'ClassroomController@view')->name('classroom.view');

Route::get('/class/{classroom_id}/assignment/{assignment_id}', 'AssignmentController@view')->name('assignment.view');