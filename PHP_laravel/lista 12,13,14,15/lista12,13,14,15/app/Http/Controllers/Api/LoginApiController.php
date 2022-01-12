<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginApiController extends Controller
{
    public function login(Request $request){
        $credenciais = $request->all(['email', 'password']);

        $token = auth('api')->attempt($credenciais);

        if(!$token){
            return response()->json(["usuario invalido"], 401);
        }

        return response()->json(["token" => $token]);
    }

    public function logout(){
        auth('api')->logout();
        return response()->json(["Mensagem" =>"Deslogado com sucesso"]);
    }
}
 