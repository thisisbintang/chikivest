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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/investor', 'Users\Investor\HomeController@index')->name('investor.home');
Route::get('/breeder', 'Users\Breeder\HomeController@index')->name('breeder.home');
Route::get('/grazier', 'Users\Grazier\HomeController@index')->name('grazier.home');
Route::get('/seller', 'Users\Seller\HomeController@index')->name('seller.home');

Route::resource('investors', 'InvestorsController');
Route::resource('graziers', 'GraziersController');
Route::resource('breeders', 'BreedersController');
Route::resource('sellers', 'SellersController');