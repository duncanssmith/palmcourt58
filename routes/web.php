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


// Disable registration
//Auth::routes();
Auth::routes(['register' => false]);

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/menu', 'HomeController@menu')->name('menu');
Route::get('/views', 'HomeController@view')->name('view');
Route::get('/functions', 'HomeController@functions')->name('functions');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('menus', 'MenusController');
