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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
//    die('Today is new day.');
    return view('welcome');
});
Route::get('/home', function () {
    die('CLOUD RUN: hello world');
});
Route::get('/test', function () {
    die('GITHUB ACTION: today is sunday !');
});
Route::get('/migrate', function () {
    Artisan::call('migrate');
    return Artisan::output();
});
Route::get('/rollback', function () {
    Artisan::call('migrate:rollback');
    return Artisan::output();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test-gcs', function() {

    $disk = Storage::disk('gcs');
    $res = $disk->put('ronaldo', file_get_contents('https://ibb.co/dkT61H1'));
    dd($res);
});
