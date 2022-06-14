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
})->name('welcome');

Route::get('/pacchetti-viaggio', 'PacchettiController@index')->name('pacchetti');

Route::get('/destinazioni', 'DestinazioniController@index')->name('destinazioni');

Route::get('/contatti', 'ContattiController@index')->name('contatti');