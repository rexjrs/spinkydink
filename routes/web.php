<?php
date_default_timezone_set('Asia/Bangkok');
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
Auth::routes();
Route::get('/', function(){
	return redirect('home');
});
Route::get('/home', 'HomeController@index');

Route::get('/auctions', 'AuctionController@index');
Route::get('/auctions/{id}', 'AuctionController@auction');
Route::post('/placeBid/{id}', 'AuctionController@placeBid')->middleware('auth');

Route::get('/profile', 'ProfileController@index');
Route::get('/invoice/{id}', 'ProfileController@invoice');
Route::post('/archive', 'ProfileController@archive');
Route::get('/profileinfo', 'ProfileController@profileinfo');
Route::post('/createprofile', 'ProfileController@createprofile');

Route::get('/newproduct', 'NewProductController@index');
Route::post('/addproduct', 'NewProductController@addproduct');
