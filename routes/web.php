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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/show', 'ClientController@index');
Route::get('/Address', [
    'as'=>'clients.index',
    'uses'=>'ClientController@index',])->middleware('auth');
Route::get('/planning/show', 'PlanningController@show');
Route::get('/planninggroup/show','PlanninggroupController@show');