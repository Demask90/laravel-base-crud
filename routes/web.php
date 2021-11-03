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
// gestione rotta della home page
Route::get('/', function () {
    return view('home');
})->name('pagina-home');

// gestione rotte parte fumetti comics
Route::resource('/comics', 'ComicController');