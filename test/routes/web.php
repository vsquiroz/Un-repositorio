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

Route::get('/categorias', function () {
    return view('cates.cate');
});

Auth::routes();

Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');
Route::get('/p/{post}/edit', 'PostsController@edit');
Route::patch('/p/{post}', 'PostsController@update');

Route::get('/cate/crear', 'CateController@create');
Route::post('/cate', 'CateController@store');

Route::post('/p', 'PostsController@store');

Route::get('/productos/{user}', 'ProductoController@index')->name('productos.show');

Route::get('/categorias/{user}', 'CateController@index')->name('categorias.show');
Route::get('/categorias/{cate}/edit', 'CateController@edit')->name('categorias.edit');
Route::patch('/categorias/{cate}', 'CateController@update')->name('categorias.update');
