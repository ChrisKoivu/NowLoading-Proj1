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


// return all users
Route::get('users', 'UserController@index');


 

// Update user
//Route::put('users/{id}', 'UserController@update');


// Update user
Route::patch('users', 'UserController@store');

// List single user
Route::get('users/{id}', 'UserController@show');


Route::post('user/login', 'UserController@login');
Route::post('user/register', 'UserController@register');


//Route::middleware('auth:api')->get('/user', function (Request $request) {
   //return $request->user();
//});

//Route::group(['middleware' => ['jwt.auth']], function () {
    //Route::get('user', 'UserController@getAuthenticatedUser');
    //Route::get('users', 'UserController@index');
//});
