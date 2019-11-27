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


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'investor'], function () {
    Route::get('/login', 'Users\Investor\Auth\LoginController@showLoginForm')->name('investor.login');
    Route::post('/login', 'Users\Investor\Auth\LoginController@login')->name('investor.login.submit');
    Route::get('/', 'Users\Investor\HomeController@index')->name('investor.home');
});

Route::group(['prefix' => 'breeder'], function () {
    Route::get('/login', 'Users\Breeder\Auth\LoginController@showLoginForm')->name('breeder.login');
    Route::post('/login', 'Users\Breeder\Auth\LoginController@login')->name('breeder.login');
    Route::get('/', 'Users\Breeder\HomeController@index')->name('breeder.home');
});

Route::group(['prefix' => 'grazier'], function () {
    Route::get('/login', 'Users\Grazier\Auth\LoginController@showLoginForm')->name('grazier.login');
    Route::post('/login', 'Users\Grazier\Auth\LoginController@login')->name('grazier.login');
    Route::get('/', 'Users\Grazier\HomeController@index')->name('grazier.home');
});

Route::group(['prefix' => 'seller'], function () {
    Route::get('/login', 'Users\Seller\Auth\LoginController@showLoginForm')->name('seller.login');
    Route::post('/login', 'Users\Seller\Auth\LoginController@login')->name('seller.login');
    Route::get('/', 'Users\Seller\HomeController@index')->name('seller.home');
});

Route::resource('investors', 'InvestorsController');
Route::resource('graziers', 'GraziersController');
Route::resource('breeders', 'BreedersController');
Route::resource('sellers', 'SellersController');
Route::resource('investment-packages', 'InvestmentPackagesController');
Route::resource('investment-packages', 'InvestmentPackagesController');