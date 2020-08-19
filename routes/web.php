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

Auth::routes();

Route::get('/', 'TaskController@index')->name('task.index');
Route::get('/home', 'TaskController@index')->name('task.index');

Route::post('/task', 'TaskController@new')->name('task.new');
Route::get('/task/{id}/edit', 'TaskController@edit')->name('task.edit');
Route::patch('/task/{id}', 'TaskController@update')->name('task.update');
Route::delete('/task/{id}', 'TaskController@delete')->name('task.delete');
