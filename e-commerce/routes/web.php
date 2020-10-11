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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('name');
Route::get('/catalogue', 'CatalogueController@see')->name('catalogue');
Route::get('/admin', 'AdminController@see')->name('admin');
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
Route::post('/admin', 'AdminController@addProduct')->name('admin');
Route::post('/cartbuy', 'CartController@buy_it')->name('cart');
Route::post('/cartremove', 'CartController@removeproduct')->name('cart');
Route::get('/cart', 'CartController@see')->name('cart');
//Route::get('/cart', 'ProductController@see')->name('cart');
Route::get('/product/{id}', 'ProductController@produit')->name('product');
Route::post('/update', 'AdminController@updateStock')->name('product');

Route::group(['prefix' => 'users'], function() {
    Route::get('/see', 'UserController@see')->name('users_see');
    Route::get('/index/{userss}', 'UserController@index')->name('users_index');
    Route::post('/catalogue', 'CatalogueController@Store')->name('catalogue_store');
});
