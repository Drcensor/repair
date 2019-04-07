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

Route::get('/action_page_users', 'SearchController@searchUser')->middleware('auth');

Route::get('/usersDetails', 'SearchController@selDetails')->middleware('auth');

Route::get('/pastRepairDetails', 'repairDetailsController@selDetails')->middleware('auth');

Route::get('/pastRepairDetailss', 'repairDetailsController@selDetailss')->middleware('auth');

Route::post('/pastRepairDetails', 'repairDetailsController@selDetails')->middleware('auth');

Route::post('/repairDetails', 'repairDetailsController@repairDetailsNow')->middleware('auth');

Route::post('/repairDetails2', 'repairDetailsController@repairDetailsNow2')->middleware('auth');

Route::post('/repairDetails3', 'repairDetailsController@repairDetails3')->middleware('auth'); //goes to repair form

Route::post('/customerNumber', 'repairDetailsController@phoneUpdate')->middleware('auth');// update customers phone number
