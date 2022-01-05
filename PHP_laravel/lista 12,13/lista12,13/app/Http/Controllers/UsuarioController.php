<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Usuario};

class UsuarioController extends Controller
{
    function listarUsuario(){
        $usuario = Usuario::perfilUsuario();
        return view('usuario.perfil', compact('usuario'));   
    }

    
}
