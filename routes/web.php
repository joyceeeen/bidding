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

Route::get('/', function(){
  //  return redirect()->route('product.index');

  return view('welcome');
});

Route::get('/products', function () {
  return view('products');
});

Route::get('/products/specific', function () {
  return view('products/specific');
});


Route::get('/messenger', function () {
  return view('messenger');
});





Auth::routes();

Route::get('province','DataController@province');
Route::get('city','DataController@city');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('seller','UserController')->middleware('auth');

Route::middleware(['auth'])->group(function(){
  Route::get('/purchased-items','OrdersController@myOrders');

  Route::get('/bought-item/{id}','OrdersController@winner')->name('order.status');
});

Route::prefix('shop')->group(function () {
  Route::middleware(['auth'])->group(function(){


    Route::resource('product','ProductsController',['except'=>['index', 'show']]);
    Route::resource('orders','OrdersController');
    Route::resource('photos','PhotosController');

  });

  Route::middleware(['auth','seller'])->group(function(){

    Route::get('/','ProductsController@myProducts')->name('product.my-products');

    Route::resource('category','CategoryController');

  });

  Route::resource('product','ProductsController')->only([
    'index', 'show'
  ]);
});
