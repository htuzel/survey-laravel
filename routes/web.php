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

Route::group(['middleware' => 'language'], function () {

    Route::get('/', 'RouteController@home')->name('mainpage');

    //Survey Routes..
    Route::get('/individual-survey', 'RouteController@individual')->name('individual_survey');
    Route::get('/group-survey', 'RouteController@group')->name('group_survey');
    Route::get('/result','RouteController@result')->name('result');
    Route::get('/about-us','RouteController@about')->name('about');


    Route::post('/result-individual', 'ResultPageController@individual')->name('form_evaluation_individual');
    Route::post('/result-group', 'ResultPageController@group')->name('form_evaluation_group');
    Route::get('/download-translate', 'RouteController@download')->name('download_translate');


    Auth::routes();
    Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('questions', 'QuestionController');
        Route::resource('references', 'ReferenceController');
        Route::resource('groups', 'GroupController');
        Route::resource('results', 'ResultController');
        Route::get('/results-group', 'ResultController@group')->name('group_results');
        Route::get('group/{id}/result', 'ResultController@groupDetail' )->name('group_result_detail');
        Route::get('/export', 'ResultController@export')->name('download_results');

    });

});


