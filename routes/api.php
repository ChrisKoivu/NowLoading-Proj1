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
    Route::patch('users', 'UserController@store');




    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@authenticate');
   

    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::get('user', 'UserController@getAuthenticatedUser');
        // List single user
        Route::get('users/{id}', 'UserController@show');
    });


//Route::middleware('auth:api')->get('/user', function (Request $request) {
   //return $request->user();
//});

//Route::group(['middleware' => ['jwt.auth']], function () {
    //Route::get('user', 'UserController@getAuthenticatedUser');
    //Route::get('users', 'UserController@index');
//});
