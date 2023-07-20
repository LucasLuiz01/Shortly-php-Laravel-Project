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
//Route::get('/register', 'App\Http\Controllers\UserController@registerForm')->name('app.register');
//Route::post('/register', 'App\Http\Controllers\UserController@register')->name('app.register.post');
//Route::get('/login', 'App\Http\Controllers\UserController@loginForm')->name('app.login');
//Route::post('/login', 'App\Http\Controllers\UserController@login')->name('app.login.post');
//Route::get('/menu', 'App\Http\Controllers\MenuController@index')->middleware('auth')->name('menu');
//Route::post('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');
//Route::post('/menu', 'App\Http\Controllers\MenuController@shortUrl')->middleware('auth')->name('post.menu');
//Route::delete('/menu/{id}', 'App\Http\Controllers\MenuController@delete')->middleware('auth')->name('link.delete');
