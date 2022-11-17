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
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
//    die('Today is new day.');
    return view('welcome');
});
Route::get('/home', function () {
    die('CLOUD RUN: hello world');
});
Route::get('/test', function () {
    die('CLOUD RUN: test');
});
Route::get('/migrate', function () {
    Artisan::call('migrate');
    return Artisan::output();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
