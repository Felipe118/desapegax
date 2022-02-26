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

Route::get('/', function () {
    return view('index');
});



Route::get('/login','App\Http\Controllers\LoginController@index')->name('desapegax.login');
Route::post('/auth','App\Http\Controllers\LoginController@auth')->name('desapegax.auth');


Route::get('/register','App\Http\Controllers\LoginController@register')->name('desapegax.register');
Route::post('/register','App\Http\Controllers\LoginController@registerPost')->name('desapegax.registerPost');
Route::middleware('authentication')->prefix('/app')->group(function(){
    Route::get('/home','App\Http\Controllers\HomeController@home')->name('app.home');
    Route::get('/logout','App\Http\Controllers\LoginController@logout')->name('app.logout');
    Route::resource('anuncio', 'App\Http\Controllers\AnuncioController');

});