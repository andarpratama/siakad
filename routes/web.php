<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/student', 'StudentController@index')->name('student');
Route::get('/student/create', 'StudentController@create')->name('student-create');
Route::post('/student', 'StudentController@store')->name('student-store');
Route::get('/student/detail/{id}', 'StudentController@show')->name('student-show');
