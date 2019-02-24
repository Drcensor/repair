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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/action_page_users', 'SearchController@searchUser');

Route::get('/usersDetails', 'SearchController@selDetails');

Route::get('/pastRepairDetails', 'repairDetailsController@selDetails');

Route::post('/pastRepairDetails', 'repairDetailsController@selDetailsNow');
