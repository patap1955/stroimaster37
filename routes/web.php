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

Route::view('/', 'index')->name('index');

Route::get('/services/{service}', 'App\Http\Controllers\PageController@service')->name('page.service');
Route::get('/price', 'App\Http\Controllers\PageController@price')->name('page.price');
Route::get('/contacts', 'App\Http\Controllers\PageController@contacts')->name('page.contacts');
