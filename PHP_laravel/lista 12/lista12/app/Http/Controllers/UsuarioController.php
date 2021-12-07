<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Usuario,Documento};

class UsuarioController extends Controller
{
    function listarUsuario(){
        $usuario = Usuario::perfilUsuario();
        $documento = Documento::all();
        return view('usuario.perfil', compact('usuario' , 'documento'));
        
    }
}
