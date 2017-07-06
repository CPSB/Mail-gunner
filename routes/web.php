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

Route::get('/', 'HomeController@welcome')->name('/');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/discaimer', 'DisclaimerController@index')->name('disclaimer.index');

Route::get('/config', 'ConfigController@index')->name('config.index');
Route::get('/config/backups', 'ConfigController@getBackups')->name('config.backup');
Route::get('/config/smtp', 'ConfigController@smtp')->name('config.smtp');
Route::get('/config/github', 'ConfigController@github')->name('config.github');

Route::post('/config/update/github', 'EnvController@updateGithub')->name('config.update.github');
Route::post('/config/update/smtp', 'EnvController@updateSmtp')->name('config.update.smtp');
Route::post('/config/update/database', 'EnvController@updateDatabase')->name('config.update.db');

Route::get('bug', 'BugController@index')->name('bug.index');
Route::post('bug/store', 'BugController@store')->name('bug.store');

Route::get('/env/create', 'EnvController@create')->name('env.create');
Route::get('/env/delete/{timestamp}', 'EnvController@destroy')->name('env.delete');
Route::get('/env/download/{filename}', 'EnvController@download')->name('env.download');
Route::get('/env/restore/{timestamp}', 'EnvController@restore')->name('env.restore');

Route::post('/action/text', 'ActionController@store')->name('action.text.store');

Route::get('/statictics', 'StatisticsController@index')->name('statistics.index');
