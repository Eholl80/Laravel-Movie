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




Route::get('/', 'MoviesController@index')->name('home');
Route::get('/home', 'MoviesController@index')->name('home');

// Accès à toutes les méthodes de MoviesController depuis l'url /movie
Route::resource('movie', 'MoviesController');

Route::get('/movieTmdb/{id}', 'MoviesTmdbController@show');

//Route::resource('comment', 'CommentsController');
//Route::get('/comment', 'CommentsController@index');
Route::post('/comment', 'CommentsController@store');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::get('/user/allUsers', 'UsersController@index')->middleware('auth'); 
});

Route::get('/user/{id}', 'UsersController@show')->middleware('auth');
Route::get('/user/{id}/edit', 'UsersController@edit')->middleware('auth')->name('edit');
Route::post('/user/{id}/update', 'UsersController@update')->middleware('auth')->name('update');
Route::get('/user/{id}/destroy', 'UsersController@destroy')->middleware('auth')->name('destroy');
//Route::resource('user', 'UsersController');

Auth::routes();
