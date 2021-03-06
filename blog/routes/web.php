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
Route::post('/countries/update/{id}', 'CountriesController@update');
Route::post('/countries/delete/{id}', 'CountriesController@destroy');

Route::get('/cities', 'CityController@index');
Route::get('/cities/create', 'CityController@create');
Route::post('/cities/store', 'CityController@store');
Route::get('/cities/show/{id}', 'CityController@show');
Route::get('/cities/edit/{id}', 'CityController@edit');
Route::post('/cities/update/{id}', 'CityController@update');
Route::post('/cities/delete/{id}', 'CityController@destroy');

Route::get('/cars', 'CarsController@index');
Route::get('/cars/create', 'CarsController@create');

//PakSweets Routes
Route::get('/paksweets', 'PaksweetController@index');

//Mrpm Website Routes
Route::get('/mrpmautos', 'MrpmautosController@index')->name('mrpmautos.index');
Route::get('/mrpmautos/services', 'MrpmautosController@services')->name('mrpmautos.services');
Route::get('/mrpmautos/about', 'MrpmautosController@about')->name('mrpmautos.about');
Route::get('/mrpmautos/team', 'MrpmautosController@team')->name('mrpmautos.team');
Route::get('/mrpmautos/contact', 'MrpmautosController@contact')->name('mrpmautos.contact');
