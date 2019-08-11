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

Route::get('/products', function () {
  return view('products');
});
Route::get('/prediction', function () {
  return view('prediction');
});

Route::post('prediction','PredictionController@price');
Route::get('prediction-peak','PredictionController@peak');

Route::get('/seller/{id}', 'UserController@show')->name('seller.profile');

Route::middleware(['auth','admin'])->group(function(){
  Route::get('/admin', 'UserController@admin');
  Route::post('/accept', 'UserController@accept')->name('accept');
  Route::post('/decline', 'UserController@decline')->name('decline');
});

Route::get('/run-job','JobController@run');
Auth::routes();

Route::get('province','DataController@province');
Route::get('city','DataController@city');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('seller','UserController')->middleware('auth');


Route::middleware(['auth'])->group(function(){
  Route::get('/purchased-items','OrdersController@myOrders');
  Route::get('/my-bids','OrdersController@myBids');
  Route::resource('messages', 'ConversationController');
  Route::get('/bought-item/{id}','OrdersController@winner')->name('order.status');

  Route::resource('rating','RatingsController');
});

Route::prefix('shop')->group(function () {
  Route::get('/product/sold','ProductsController@sold')->name('sold.products');

  Route::middleware(['auth'])->group(function(){
    Route::resource('product','ProductsController',['except'=>['index', 'show']]);
    Route::resource('orders','OrdersController');
    Route::resource('photos','PhotosController');

    Route::resource('order','OrderStatusController');
  });


  Route::middleware(['auth','seller'])->group(function(){

    Route::get('/','ProductsController@myProducts')->name('product.my-products');

    Route::resource('category','CategoryController');

  });

  Route::resource('product','ProductsController')->only([
    'index', 'show'
  ]);


});
