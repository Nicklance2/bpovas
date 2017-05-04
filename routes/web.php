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


Route::get('/', 'HomeController@index')->name("home");
Route::get('/admin', 'AdminController@index')->name("admin")->middleware('auth');
Route::get('/admin/profile', 'ProfileController@index')->name("profile");
Route::patch('/admin/profile', 'ProfileController@update');
Route::get('/admin/settings', 'SettingsController@index')->name("settings");
Route::get('/admin/pipeline', 'PipelineController@index')->name("pipeline");

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create')->name("login");
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');


Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name("password.request");;
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name("password.email");
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name("password.reset");;
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
