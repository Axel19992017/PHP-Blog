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

Route::get('hola', 'HolaController');

Route::get('usuario/{nombre}/comentario/{comentariod}', function($nombre="Mundo", $comentariod){
    return 'Hola '.$nombre .' y el comentario es: '. $comentariod;
});

Route::get('usuario/{nombre?}','UsuarioController@usuarioUnParametro')->where('nombre','[A-Za-z]+'); // en minuscula z del final

Route::get('usuario/{id}/{nombre}','UsuarioController@usuarioDosParametros')->where(
    [
        'id' => '[0-9]+',
        'nombre' => '[A-Za-z]+'
    ]
); // http://127.0.0.1:8000/user2/12/axel

Route::get('prueba', function(){
    return 'Página de prueba';
})->name('pruebaRoute');

Route::get('redirigirPrueba', function(){
    return redirect()->route('pruebaRoute');
});

Route::redirect('/prueba3','/prueba');