<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertAssinaturaRequest;
use App\Models\Assinatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function criarAssinatura(){
        return view('assinatura.criaass');
    }

    public function store(InsertAssinaturaRequest $request){
        DB::beginTransaction();
        
        $assinatura = new Assinatura();
        $assinatura = $assinatura->cadastrarAssinatura($request);
        DB::commit();
        return redirect()->route('assinaturas.listar')->with('message',"A Assinatura $assinatura->assinaturaPadrao  foi criada com sucesso!");       
    }
    
}
