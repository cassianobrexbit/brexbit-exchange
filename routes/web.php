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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('sell_cryptos', 'SellCryptoController');
Route::resource('buy_cryptos', 'BuyCryptoController');
Route::get('/getFile/{id}', 'BuyCryptoController@getFile');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
