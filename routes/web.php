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


Route::group(['middleware' => ['auth', 'verified','status']], function(){
    
    // super admin middleware and routes
    Route::group(['middleware' => ['super-admin']], function(){
        
    });


    // admin middleware and routes
    Route::group(['middleware' => ['admin']], function(){

    });

        // user routes
        Route::get('/dashboard', 'DashboardController@index');
        Route::get('/home', 'HomeController@sindexs');
    
});


//accessible routes to all visitors

Auth::routes(['verify' => true]);

//preview page of user
Route::get('/page/{email}', 'HomeController@index')->name('user.page_preview');

//darkmode and lightmode route
Route::get('/toggletheme', 'HomeController@toggletheme');
Route::post('/sendmessage', 'HomeController@sendmessage');

//social login
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

