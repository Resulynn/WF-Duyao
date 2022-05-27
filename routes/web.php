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
Route::resource('/largo','App\Http\Controllers\LargoPageController');
Route::resource('/segue','App\Http\Controllers\SeguePageController');
Route::get('/cart','App\Http\Controllers\PagesController@segue');
Route::resource('/blog','App\Http\Controllers\BlogController');
Route::resource('/largo/item','App\Http\Controllers\LargoPageController');

Route::get('addtocart', [App\Http\Controllers\LargoPageController::class, 'addtocart']);
Auth::routes();
Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout'])->name('logout.logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


