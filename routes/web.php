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

Route::get('login', 'Petugascontroller@index');
Route::post('login/cek', 'Petugascontroller@cek');
Route::get('logout', 'Petugascontroller@logout');
Route::resource('/register', 'RegisterController');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard2', 'Dash2Controller@index');
Route::get('/courses', 'CoursesController@index');
Route::get('/teachers', 'TeachersController@index');
Route::get('/htmlcourse', 'CoursesController@html');
Route::get('/csscourse', 'CoursesController@css');
Route::get('/phpcourse', 'CoursesController@php');
Route::get('/sqlcourse', 'CoursesController@sql');
Route::get('/jscourse', 'CoursesController@js');
Route::get('/html1', 'CoursesController@html1');
Route::get('/css1', 'CoursesController@css1');
Route::get('/php1', 'CoursesController@php1');

Route::get('/', 'PostController@index');
Route::get('/{slug}', 'PostController@show');
Route::post('/comment', 'PostController@comment');
