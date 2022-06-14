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

Route::get('/pacchetti-viaggio', function () {
    return view('pacchetti-viaggio');
})->name('pacchetti');

Route::get('/destinazioni', function () {
    return view('destinazioni');
})->name('destinazioni');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');