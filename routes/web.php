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

//Route::get('/{any}', 'App\Http\Controllers\AppController@index')->where('any', '^(?!storage).*$');


Route::get('/', function () {
    return view('home');
});
Route::get('/product', 'ProductController@index')->name('product');
Route::get('/catogory', 'CategoryController@index')->name('catogory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
