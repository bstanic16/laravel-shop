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

Route::group(['middleware' => 'admin'], function () {
    Route::get('categories/{category}/edit', 'CategoryController@edit');
    Route::get('/categories/{category}/delete','CategoryController@destroy');
    Route::get('/products/create', 'ProductController@create');
    Route::get('products/{product}/edit', 'ProductController@edit');
    Route::get('/products/{product}/delete','ProductController@destroy');
    Route::get('/users', 'UserController@index');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/products', 'ProductController@index');
    Route::get('/products/sale', 'ProductController@onSale');
    Route::get('/products/{product}', 'ProductController@show');
    Route::post('/products', 'ProductController@store');
    Route::put('products/{product}','ProductController@update');
    Route::get('/orders', 'OrderController@index');
    Route::get('/orders/create', 'OrderController@create');
    Route::get('/orders/{order}', 'OrderController@show');
    Route::post('/orders', 'OrderController@store');
    Route::get('/orders/new/products', 'OrderController@createOrder');
    Route::post('/orders', 'OrderController@newOrder');
    Route::get('/order-details/', 'OrderDetailsController@index');
    Route::get('/order-details/{orderDetail}', 'OrderDetailsController@show');
    Route::get('/cart', 'CartController@index');
    Route::get('/cart/{cart}', 'CartController@show');
    Route::get('/cart/product/{product}', 'CartController@addToCart');
    Route::get('/cart/{user}/delete','CartController@destroy');
    Route::get('/cart/{product}/remove','CartController@remove');
    Route::get('/users/sale','UserController@sale');
});

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{category}', 'CategoryController@show');
Route::put('categories/{category}','CategoryController@update');

Route::get('/company/{company}', 'CompanyController@show');

Route::get('/payments/', 'PaymentController@index');

Route::get('newsletter','NewsletterController@create');
Route::post('newsletter','NewsletterController@store');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
