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
Route::get('/amna3', 'AmnaController@amna3View');
Route::get('/amna4', 'AmnaController@amna4View');
Route::get('/amna5', 'AmnaController@amna5View');
Route::get('/amna6', 'AmnaController@amna6View');
Route::get('/amna7', 'AmnaController@amna7View');
Route::get('/amna8', 'AmnaController@amna8View');
Route::get('/amna9', 'AmnaController@amna9View');
Route::get('/amna10', 'AmnaController@amna10View');

Route::get('/amna11', 'Amna1Controller@index');
Route::get('/amna12', 'Amna2Controller@index');
Route::get('/amna13', 'Amna3Controller@index');
Route::get('/amna14', 'Amna4Controller@index');
Route::get('/amna15', 'Amna5Controller@index');
Route::get('/amna16', 'Amna6Controller@index');
Route::get('/amna17', 'Amna7Controller@index');
Route::get('/amna18', 'Amna8Controller@index');
Route::get('/amna19', 'Amna9Controller@index');
Route::get('/amna20', 'Amna10Controller@index');

Route::get('/countries', 'CountriesController@index');
Route::get('/states', 'StatesController@index');
Route::get('/states/create', 'StatesController@create');
Route::post('/states/store', 'StatesController@store');

Route::get('/countries/create', 'CountriesController@create');
Route::post('/countries/store', 'CountriesController@store');
Route::get('/states/show/{id}', 'StatesController@show');
Route::get('/countries/show/{id}', 'CountriesController@show');
Route::get('/countries/edit/{id}', 'CountriesController@edit');
Route::get('/states/edit/{id}', 'StatesController@edit');
Route::post('/countries/update/{id}', 'CountriesController@update');
Route::post('/countries/delete/{id}', 'CountriesController@delete');
Route::post('/states/update/{id}', 'StatesController@update');
Route::post('/states/delete/{id}', 'StatesController@destroy');

Route::get('/cities', 'CityController@index');
Route::get('/cities/create', 'CityController@create');
Route::post('/cities/store', 'CityController@store');
Route::get('/cities/show/{id}', 'CityController@show');
