<?php

use Illuminate\Http\Request;
use App\Link;
use App\Track;

use App\Http\Resources\LinkResource as LinkResource;


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

    // return all links
    //Route::get('links', 'LinksController@index');
    
    Route::get('/links', function () {
        return new LinkResource(Link::find(1));
    });

    Route::post('tracks', 'TrackPageController@store');
    //Route::post('track', 'TrackPageController@store');    
    
    // return all users
    Route::get('users', 'UserController@index');
    
    // Update user
    Route::patch('users', 'UserController@store');


/* 

    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@authenticate');
 */   

    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::get('user', 'UserController@getAuthenticatedUser');
        // List single user
        Route::get('users/{id}', 'UserController@show');
    });

