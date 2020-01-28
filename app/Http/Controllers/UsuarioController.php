<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// php artisan make:controller UsuarioController
class UsuarioController extends Controller
{
    public function usuarioUnParametro($nombre='Invitado'){
        return 'Usuario es '.$nombre;
    }
    public function usuarioDosParametros($id, $nombre){
        return 'Usuario es '.$id. ' y el nombre es: '.$nombre;
    }
}
