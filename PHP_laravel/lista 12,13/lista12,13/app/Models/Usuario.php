<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    static function perfilUsuario(){
        $usuario = array(
            "nome" => "Gabriel Anadinho Pinheiro",
            "idade" => "25"
        );
       return $usuario; 
    }
}
