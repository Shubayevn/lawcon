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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

Route::resource('posts', PostController::class)->middleware('auth');
Route::resource('admin', AdmController::class)->middleware('auth');
//Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'BaseController@index')->name('index');
