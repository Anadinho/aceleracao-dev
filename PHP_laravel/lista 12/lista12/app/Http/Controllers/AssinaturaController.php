<?php

namespace App\Http\Controllers;

use App\Models\Assinatura;
use Illuminate\Http\Request;
class AssinaturaController extends Controller
{

    public function listarAssinaturas(){
        $assinaturas = Assinatura::all();        
        return view('assinatura.index', compact('assinaturas'));
    }

    public function listarAssinatura($id){
        $assinatura = Assinatura::find($id);       

        if(!$assinatura){
            return redirect()->route('assinatura.listar');
        }

        return view('assinatura.exibeass', compact('assinatura'));
    }
    
}
