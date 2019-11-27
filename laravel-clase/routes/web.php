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

Route::get('/login', function(){
  return view('login');
});

//Rutas parametrizadas
Route::get('/conparametro/{unparametro}', function($unparametro){
  return "Esta es una ruta con un parámetro obligatorio: $unparametro";
});

//Rutas parametrizadas optativas.
Route::get('/conparametrooptativo/{unparametro?}', function($unparametro = "Soy optativo"){
  return "Esta es una ruta con un parámetro obligatorio: $unparametro";
});

//Pasando variables a la vista
Route::get('/convariable', function (){
  $nombre = "Ale";
  return view('login', compact('nombre'));
});

//Ejercicio clase 1.
Route::get('/esPar/{numero}', function($numero){
  if ($numero%2 == 0){
    return "El núermo es par";
  } else{
    return "El núermo NO es par";
  }
});



Route::get('/peliculas', "PeliculaController@index");
Route::get('/pelicula/{id}', 'PeliculaController@show');
Route::get('/actores', 'ActorController@index');
Route::get('addmovie','PeliculaController@create');
Route::post('addmovie','PeliculaController@store');

Route::get('/actor/add','ActorController@create');
Route::post('/actor/add','ActorController@store');

Route::get('/actor/{id}/edit','ActorController@edit');
Route::post('/actor/{id}/edit','ActorController@update');

Route::get('/actor/{id}','ActorController@show');
Route::post('/actor/{id}','ActorController@edit');




//
