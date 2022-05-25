<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/about','App\Http\Controllers\PagesController@about');
Route::get('/index','App\Http\Controllers\PagesController@index');
Route::get('/largo','App\Http\Controllers\PagesController@largo');
Route::get('/segue','App\Http\Controllers\PagesController@segue');


Route::resource('/blog','App\Http\Controllers\BlogController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


