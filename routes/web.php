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

Route::get('/', 'RouteController@home')->name('home');


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Admin Pages
Route::get('/home', 'HomeController@index')->name('home');

//Survey Routes..
Route::get('/individual-survey', 'RouteController@individual')->name('individual_survey');
Route::get('/group-survey', 'RouteController@group')->name('group_survey');

Route::post('/result-individual', 'ResultController@individual')->name('form_evaluation_individual');
Route::post('/result-group', 'ResultController@group')->name('form_evaluation_group');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
