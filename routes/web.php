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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/admin/routes', 'HomeController@admin')->middleware('admin');

Route::get('/', 'HomeController@index');
Route::get('admin/category/create','CategoryController@create');
Route::post('admin/category/create','CategoryController@store');
Route::get('admin/category/show/{id}', 'CategoryController@show');
Route::get('admin/category/edit/{id}', 'CategoryController@edit');
Route::patch('admin/category/edit/{id}', 'CategoryController@update');
Route::delete('admin/category/delete/{id}', 'CategoryController@destroy');
Route::get('/category/products/{id}', 'CategoryController@display');

//Product Model Routes
Route::get('/admin/product/index', 'ProductController@index');
Route::get('admin/product/create','ProductController@create');
Route::post('admin/product/create','ProductController@store');
Route::get('admin/product/show/{id}', 'ProductController@show');
Route::get('admin/product/edit/{id}', 'ProductController@edit');
Route::patch('admin/product/edit/{id}', 'ProductController@update');
Route::delete('admin/product/delete/{id}', 'ProductController@destroy');
//Cart controller routes
Route::get('add-to-cart/{id}', 'CartController@add');
Route::get('cart/edit/{id}', 'CartController@edit');
Route::get('cart/index', 'CartController@index')->name('cart.index');
Route::get('cart/show/{id}', 'CartController@show');
Route::get('item/remove/{id}', 'CartController@remove');

Route::post('checkout', 'MpesaController@checkout')->name('checkout');




