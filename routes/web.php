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

Route::get('/','CourseController@index')->name('course.index');

Route::get('/signup','UserController@viewSignupForm')->middleware('guest');
Route::post('/signup','UserController@signup')->name('signup')->middleware('guest');
Route::get('/signin', 'UserController@viewSigninForm')->middleware('guest');
Route::post('/signin','UserController@signin')->name('signin')->middleware('guest');

Route::get('/user/profile','UserController@showProfile')->name('profile')->middleware('auth');

Route::get('/user/logout','UserController@logout')->name('logout')->middleware('auth');
