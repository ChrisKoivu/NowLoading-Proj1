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


Auth::routes();

    

Route::get('/', 'LandingController@index')->name('landingpage'); //this was changed from homecontroller ->name('home')
                                                                 //to landingcontroller ->name('landingpage')
Route::get('/survey', 'SurveysController@index')->name('survey');

Route::post('/survey', 'SurveysController@store');


Route::get('/survey/show', 'SurveysController@show');

Route::get('/report', 'ReportsController@index');

Route::get('/report/show/{id}', 'ReportsController@show');

Route::post("/report/generate", "ReportsController@generate");

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index');

Route::get('/files', 'FilesController@index');


Route::get('/files/upload', 'FilesController@upload');

Route::post('/files/store', 'FilesController@store');


Route::get('/links', 'LinksController@index')->name('links');

Route::get('/links/create', 'LinksController@create');

Route::get('/links/visited', 'LinksController@getVisitedLinks');

Route::get('/links/{category}', 'LinksController@getLinksByCategory');


Route::post('/links', 'LinksController@store');


Route::resource('roles','RolesController');

Route::resource('pages','PagesController');

/** verify admin before routing */
Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');

Route::get('auth/{driver}', ['as' => 'socialAuth', 'uses' => 'Auth\SocialController@redirectToProvider']);
Route::get('auth/{driver}/callback', ['as' => 'socialAuthCallback', 'uses' => 'Auth\SocialController@handleProviderCallback']);

