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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hola', function(){
    return 'Hola Axel García';
});

Route::get('usuario/{nombre}/comentario/{comentariod}', function($nombre="Mundo", $comentariod){
    return 'Hola '.$nombre .' y el comentario es: '. $comentariod;
});

Route::get('user/{nombre}', function($nombre){
    return 'Usuario es '.nombre;
})->where('nombre','[A-Za-Z]+');
