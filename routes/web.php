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

Route::get('/products', function () {
  return view('products');
});

Route::get('/products/specific', function () {
  return view('products/specific');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('seller','UserController')->middleware('auth');

Route::prefix('seller')->group(function () {

  Route::middleware(['auth','seller'])->group(function(){

    Route::resource('product','ProductsController');
    Route::resource('photos','PhotosController');

  });
});
