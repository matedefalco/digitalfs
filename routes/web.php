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
use Illuminate\Support\Facades\Input;
use App\User;

Auth::routes();

Route::post('/postear', 'PostController@store');
//Vistas
Route::get('/','HomeController@show');
Route::get('/inicio', 'HomeController@index')->name("home")->middleware('auth');
Route::get('/post','PostController@index')->middleware('auth');
Route::get('/message','MessageController@index')->middleware('auth');
Route::get('/edit/{id}','UnPostController@show')->middleware('auth');
Route::get('/destroy/{id}','UnPostController@destroy')->middleware('auth');
//Individuales
Route::get('/user/{id}', 'UserController@index')->middleware('auth');
Route::get('/post/{id}', 'UnPostController@index')->middleware('auth');
//Crear
Route::get('/crearPost','PostController@create')->middleware('auth');
Route::post('/crearPost','PostController@store')->middleware('auth');
Route::post('/comment','CommentController@store')->middleware('auth');


//Editar
Route::post('/edit','UnPostController@update')->middleware('auth');

//buscar
Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'search' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
} );

// Route::group(['middleware' => 'auth'], function () {
//    Route::resource('/home', 'HomeController@index')->middleware('auth');
// });
