<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Home page
Route::get('/', 'AboutController@index');

//Products page
Route::get('products', 'ProductsController@index');

//Single Product Page
Route::get('products/{title}', 'ProductsController@single');

//Add Product Page
Route::get('AddProduct', array('uses' => 'AddProductController@getAddProduct'));
Route::post('AddProduct', array('uses' => 'AddProductController@postAddProduct'));

//Other Controllers.
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
