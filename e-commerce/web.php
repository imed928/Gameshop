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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@see')->name('Admin');
Route::post('/admin', 'AdminController@addProduct')->name('addProduct');
Route::get('/catalogue', 'CatalogueController@see')->name('Catalogue');
Route::get('/product', 'ProductController@see')->name('Product');