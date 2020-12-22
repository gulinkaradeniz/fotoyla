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
    return view('index');
});

Auth::routes();

Route::get('/home', 'FotoylaController@index');
Route::resource('fotoyla', 'FotoylaController');
Route::get('/', 'FotoylaController@index');
Route::resource('users', 'UsersController');
Route::get('users/{id}/upload', 'UsersController@upload');
Route::post('/users/{id}/upload', 'UsersController@upload_create');
Route::post('/addimage', 'UsersController@upload_create')->name('addimage');
Route::post('/remove_image', 'UsersController@remove_image');
Route::post('/score/{id}', 'UsersController@score');