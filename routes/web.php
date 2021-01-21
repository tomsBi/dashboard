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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'TaskController@index')->name('tasks.index');
Route::get('/tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('/tasks/store', 'TaskController@store')->name('tasks.store');
Route::delete('/tasks/{task}', 'TaskController@destroy')->name('tasks.destroy');
Route::get('/tasks/{task}', 'TaskController@edit')->name('tasks.edit');
Route::put('/tasks/update/{task}', 'TaskController@update')->name('tasks.update');



