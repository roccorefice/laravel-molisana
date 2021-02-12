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

//HOME
Route::get('/', function () {
    return view('welcome');
})-> name('home');


//PRODOTTI
Route::get('prodotti', function () {
    
    $db_pasta = json_decode(config('dati.data'), true);
    return view('prodotti', compact('db_pasta'));
})-> name('products');


//CONTATTI
Route::get('contatti', function () {
    return view('contatti');
})-> name('contacts');
