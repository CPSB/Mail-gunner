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

Route::get('/', 'HomeController@welcome')->name('/');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/config', 'ConfigController@index')->name('config.index');
Route::get('/config/backups', 'ConfigController@getBackups')->name('config.backup');
Route::get('/config/smtp', 'ConfigController@smtp')->name('config.smtp');

Route::get('/env/create', 'EnvController@create')->name('env.create');
Route::get('/env/delete/{timestamp}', 'EnvController@destroy')->name('env.delete');
Route::get('/env/download/{filename}', 'EnvController@download')->name('env.download');
Route::get('/env/restore/{timestamp}', 'EnvController@restore')->name('env.restore');


Route::get('/statictics', 'StatisticsController@index')->name('statistics.index');
