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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/amna', 'AmnaController@amnaView');
Route::get('/amna1', 'AmnaController@amna1View');
Route::get('/amna2', 'AmnaController@amna2View');

Route::get('/tomandjerry', 'Amna1Controller@index');
Route::get('/abc', 'Amna2Controller@index');
Route::get('/def', 'Amna3Controller@index');
Route::get('/amna4', 'Amna4Controller@index');
Route::get('/amna5', 'Amna5Controller@index');
Route::get('/amna6', 'Amna6Controller@index');
Route::get('/amna7', 'Amna7Controller@index');
Route::get('/amna8', 'Amna8Controller@index');
Route::get('/amna9', 'Amna9Controller@index');
Route::get('/amna10', 'Amna10Controller@index');

Route::get('/countries', 'CountriesController@index');
Route::get('/countries/create', 'CountriesController@create');
Route::post('/countries/store', 'CountriesController@store');
Route::get('/countries/show/{id}', 'CountriesController@show');
Route::get('/countries/edit/{id}', 'CountriesController@edit');
