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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::post('/postear', 'PostController@store');
//Vistas
Route::get('/', 'HomeController@index');
Route::get('/post','PostController@index');
Route::get('/message','MessageController@index');
//Individuales
Route::get('/user/{id}', 'UserController@index');
Route::get('/post/{id}', 'UnPostController@index');
//Crear
Route::get('/crearPost','PostController@create');
Route::post('/crearPost','PostController@store');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/', 'HomeController@index');
});
