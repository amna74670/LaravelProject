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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/amna1', 'AmnaController@amna1View');
Route::get('/amna2', 'Amna1Controller@index');
Route::get('/amna3', 'Amna2Controller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
