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

Route::get('/', function () {
    return view('welcome');
});

Route::get('start','WaarController@index')->name('start');
Route::get('login','WaarController@login')->name('login');
Route::get('signup','WaarController@signup')->name('signup');
Route::get('forgot','WaarController@forgot')->name('forgot');
Route::get('product','WaarController@product')->name('product');
Route::get('category','WaarController@category')->name('category');
Route::get('cart','WaarController@cart')->name('cart');
Route::get('productdetail','WaarController@detail')->name('detail');

Route::get('logout','WaarController@logout')->name('logout');
Route::get('confirm1','WaarController@confirm1')->name('confirm1');


Route::get('customerdetail','WaarController@customer')->name('customer');
Route::get('sew','WaarController@sew')->name('sew');

Route::post('check','WaarController@checklogin')->name('check');
Route::post('checkSignIn','WaarController@checkSignIn')->name('checkSignIn');

Route::post('forgot1','WaarController@checkEmail')->name('checkEmail');
Route::get('pass/{id}','WaarController@resetpassword')->name('pass');
Route::post('passwordreset','WaarController@savepassword')->name('savepassword');

Route::post('add','WaarController@addcart')->name('add');
Route::post('delete','WaarController@delCart')->name('delete');
Route::post('update','WaarController@upCart')->name('update');
Route::get('checkout','WaarController@checkout')->name('checkout');
Route::post('confirm','WaarController@confirm')->name('confirm');

Route::post('wishlist','WaarController@wishlist')->name('wishlist');
Route::post('size','WaarController@size')->name('size');

Route::get('try','WaarController@try');
