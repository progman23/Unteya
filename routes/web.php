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

Route::get('/', 'IndexController@index')->name('adsIndex');
Route::get('ads/{id}', 'IndexController@show')->name('adsShow');
Route::get('page/add','IndexController@add')->name('adsAdd');
Route::post('page/add','IndexController@store')->name('adsStore');
Route::get('ads2/{id}','IndexController@show2')->name('adsShow2');
Route::post('page/edit','IndexController@edit')->name('adsEdit');
Route::delete('page/delete{ads}',function(\App\Ad $ads){
	$ads->delete();
	return redirect('/');
})->name('adsDelete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

