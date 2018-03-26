<?php

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


use App\Http\Controllers\AntennasController;
use App\Http\Controllers\DbmsController;
use App\Http\Controllers\DonneesController;
use App\Http\Controllers\FreqsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('token', 'TokenController@index');

Route::resource('antennas', 'AntennasController');

Route::get("freqs/value/{value}", 'FreqsController@showByValue');
Route::resource('freqs',  'FreqsController');

Route::get("timestamps/value/{value}", 'TimestampsController@showByValue');
Route::resource('timestamps',  'TimestampsController');


Route::get("dbms/value/{value}", 'DbmsController@showByValue');
Route::resource('dbms', 'DbmsController');
Route::resource('bands', 'BandsController');


Route::resource('donnees', "DonneesController");
Auth::routes();


Route::get('/', function () {
    return view('welcome');
});