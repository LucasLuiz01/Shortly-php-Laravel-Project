<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('web')->group(function () {
    Route::get('/register', 'App\Http\Controllers\UserController@registerForm')->name('app.register');
    Route::post('/register', 'App\Http\Controllers\UserController@register')->name('app.register.post');
    Route::get('/login', 'App\Http\Controllers\UserController@loginForm')->name('app.login');
    Route::post('/login', 'App\Http\Controllers\UserController@login')->name('app.login.post');
    Route::get('/menu', 'App\Http\Controllers\MenuController@index')->name('menu');
    Route::post('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');
    Route::post('/menu', 'App\Http\Controllers\MenuController@shortUrl')->middleware('auth:api')->name('post.menu');
    Route::delete('/menu/{id}', 'App\Http\Controllers\MenuController@delete')->middleware('auth:api')->name('link.delete');
});