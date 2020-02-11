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
/*Route::get('/usuarios', function () {
    
});
Route::get('/usuarios/create', function () {
    
});*/
Route::resource('usuarios','UsuariosController');//->middleware('auth');
Auth::routes();

Route::get('/home', 'UsuariosController@index')->name('home');
