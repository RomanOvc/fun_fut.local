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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('page','IndexNewController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','UserController@index');

Route::delete('/welcome/{email}','UserController@destroy')->name('welcome');
//Route::resource('blog','UserController');

//
//Route::get('/players','PlayerController@show')->name('players');
//Route::get('/addPlayer','PlayerController@create')->name('addPlayer');
//Route::post('/addPlayer','PlayerController@store');
//
//// Route для записи данных в бд
//Route::group(array('before'=>'players'),function(){
//    Route::get('/addPlayer','PlayerController@create')->name('addPlayer');
//    Route::post('/addPlayer','PlayerController@store');
//});
//Route::delete('players/{id}','PlayerController@destroy');
//Route::delete('deletePlayer/{id}','PlayerController@destroy');
//Route::get('editPlayer','PlayerController@showPlayer')->name('editPlayer');

///////////////////////////////////////////////////////////////

Route::get('welcome','BlogController@index1')->name('blogs');
//Route::get('home','BlogController@index2');

Route::resource('blog','BlogController');




