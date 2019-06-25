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

// The home is where all ledger for the day will be displayed 
// If the user is not authenticated he or she will redirected to login form

Route::get('/', 'LedgerController@all_ledgers');
// Route::get('/home', 'LedgerController@')

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
