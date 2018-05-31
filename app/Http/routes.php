<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::group(['middleware' => 'auth'], function () 
{   
		Route::resource('users','UsersController');
		Route::resource('customers','CustomersController');
		Route::get('/', 'DashboardController@index');
		Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
		Route::get('/dashboard',  ['as' => 'dashboard', 'uses' => 'DashboardController@index']);       
		Route::get('/settings', ['as' => 'settings', 'uses' => 'SettingsController@index']);
		Route::post('settings/store', ['as' => 'settings.store', 'uses' => 'SettingsController@store']);
		Route::resource('invoice', 'InvoiceController');
});


