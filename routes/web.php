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

Route::get('/welcome', function () {
    return view('welcome');
});


route::get('/', 'LandingPageController@index')->name('landingpage');
route::get('/shop', 'ShopController@index')->name('shop.index');
route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
route::get('/cart', 'CartController@index')->name('cart.index');
route::post('/cart', 'CartController@store')->name('cart.store');
route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');


Route::get('/checkout' ,'CheckoutController@index')->name('checkout.index')->middleware('auth');

// guest checkout
Route::get('/guestCheckout' ,'CheckoutController@index')->name('guestCheckout.index');


Route::get('empty',function(){
    Cart::instance('saveForLater')->destroy();
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/hf', function () {
    return view('hf');
});

Route::get('/about', function () {
    return view('about');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
