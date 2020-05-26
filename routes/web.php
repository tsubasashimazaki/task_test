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

// アクセスしたらviewのWelocomページに飛ばしてね
Route::get('/', function () {
    return view('welcome');
});

// tests/testにアクセスしたらTestControllerに飛ばしてね
Route::get('tests/test', 'TestController@index');

// この1行でルーティングをまかなっている Auth/Controller...
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
