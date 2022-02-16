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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/home','App\Http\Controllers\uploadController@upload');

Route::get('/home','App\Http\Controllers\showController@show');

Route::get('/delete{id}','App\Http\Controllers\deleteController@delete');

Route::post('/update/{id}','App\Http\Controllers\updateController@update');

Route::post('/profileupdate/{id}','App\Http\Controllers\profileUpdateController@profileupdate');

Route::get('/','App\Http\Controllers\allViewController@view');

Route::post('/','App\Http\Controllers\selectedController@viewselect');
