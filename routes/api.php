<?php

use Illuminate\Http\Request;

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
Route::middleware('auth:api', 'cors')->group(function () {
      Route::get('/user', function () {
		
        return auth()->user();
    });
});


Route::resource('users', 'User\UserController', ['except'=>['create','edit']])->middleware('client', 'cors');
