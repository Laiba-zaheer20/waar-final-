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

Route::view('laiba','bread');

Route::get('waar','WaarController@index');



Route::get('/insertitem',['uses'=>'WaarController@store','as'=>'data.store']);
Route::get('/delitem',['uses'=>'WaarController@destroy','as'=>'data.del']);
//Route::get('waars','WaarController@store');
Route::get('/category',['uses'=>'WaarController@show','as'=>'data.show']);
Route::get('/subcategory',['uses'=>'WaarController@create','as'=>'cat.create']);
Route::get('/', function () {
    return view('welcome');
});




