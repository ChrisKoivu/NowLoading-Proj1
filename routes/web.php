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



Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/resourcePages/EducationPage', 'ResourceController@eduResource')->name('EducationPage');
Route::get('/resourcePages/BusinessPage', 'ResourceController@busResource')->name('BusinessPage');
Route::get('/resourcePages/MedicalPage', 'ResourceController@medResource')->name('MedicalPage');
Route::get('/resourcePages/CommunityPage', 'ResourceController@comResource')->name('CommunityPage');
Route::get('/resourcePages/GovernmentPage', 'ResourceController@govResource')->name('GovernmentPage');
Route::get('/resourcePages/FamilyPage', 'ResourceController@famResource')->name('FamilyPage');
Route::get('/resourcePages/TravelPage', 'ResourceController@travResource')->name('TravelPage');

Route::resource('roles','RolesController');

Route::resource('pages','PagesController');

/** verify admin before routing */
Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');

    