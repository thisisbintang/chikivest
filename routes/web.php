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


Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{id}', 'ProfilesController@show')->name('profile');
Route::get('/update-profile/{id}', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{id}', 'ProfilesController@update')->name('profile.update');

Route::group(['prefix' => 'investor'], function () {
    Route::get('/login', 'Users\Investor\Auth\LoginController@showLoginForm')->name('investor.login');
    Route::post('/login', 'Users\Investor\Auth\LoginController@login');
    Route::post('/logout', 'Users\Investor\Auth\LoginController@logout')->name('investor.logout');
    Route::get('/', 'Users\Investor\HomeController@index')->name('investor.home');
//    Route::get('/profile/{id}', 'ProfilesController@show')->name('investor.profile');
//    Route::get('/update-profile/{id}', 'ProfilesController@edit')->name('investor.profile.edit');
//    Route::post('/profile/{id}', 'ProfilesController@update')->name('investor.profile.update');
});

Route::group(['prefix' => 'breeder'], function () {
    Route::get('/login', 'Users\Breeder\Auth\LoginController@showLoginForm')->name('breeder.login');
    Route::post('/login', 'Users\Breeder\Auth\LoginController@login');
    Route::post('/logout', 'Users\Breeder\Auth\LoginController@logout')->name('breeder.logout');
    Route::get('/', 'Users\Breeder\HomeController@index')->name('breeder.home');
});

Route::group(['prefix' => 'grazier'], function () {
    Route::get('/login', 'Users\Grazier\Auth\LoginController@showLoginForm')->name('grazier.login');
    Route::post('/login', 'Users\Grazier\Auth\LoginController@login');
    Route::post('/logout', 'Users\Grazier\Auth\LoginController@logout')->name('grazier.logout');
    Route::get('/', 'Users\Grazier\HomeController@index')->name('grazier.home');
});

Route::group(['prefix' => 'seller'], function () {
    Route::get('/login', 'Users\Seller\Auth\LoginController@showLoginForm')->name('seller.login');
    Route::post('/login', 'Users\Seller\Auth\LoginController@login');
    Route::post('/logout', 'Users\Seller\Auth\LoginController@logout')->name('seller.logout');
    Route::get('/', 'Users\Seller\HomeController@index')->name('seller.home');
});

Route::resource('investors', 'InvestorsController');
Route::resource('graziers', 'GraziersController');
Route::resource('breeders', 'BreedersController');
Route::resource('sellers', 'SellersController');