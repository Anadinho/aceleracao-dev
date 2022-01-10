<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertDocumentoRequest;
use DateTime;
use Illuminate\Http\Request;
use App\Models\{Documento};
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{

    public function listarDocumentos(){
        $documentos = Documento::all();
        $momentoConsulta = new DateTime('NOW');

        if(!$documentos){
            Log::channel('documentos')->info("Não existe Documentos!!{$momentoConsulta->format(DateTime::ISO8601)}");
        }
        Log::channel('documentos')->info("Documentos listados com sucesso!!{$momentoConsulta->format(DateTime::ISO8601)}");
       
        return view('documentos.index', compact('documentos'));
    }

    public function listarDocumento($id){
        $documento = Documento::find($id);
        $momentoConsulta = new DateTime('NOW');

        if(!$documento){
            Log::channel('documentos')->info("DOCUMENTO DE ID {$id} NÃO ENCONTRADO!!{$momentoConsulta->format(DateTime::ISO8601)}");
            return redirect()->route('documentos.listar');
        }

        Log::channel('documentos')->info("DOCUMENTO DE ID {$id} consultado com sucesso!!{$momentoConsulta->format(DateTime::ISO8601)}");
        return view('documentos.exibedoc', compact('documento'));
    }

    public function criarDocumento(){
        return view('documentos.criadoc');
    }

    public function store(InsertDocumentoRequest $request){
        DB::beginTransaction();
        
        $documento = new Documento();
        $documento = $documento->cadastrarDocumento($request);
        DB::commit();
        return redirect()->route('documentos.listar')->with('message',"O Documento $documento->title  foi criado com sucesso!");       
    }

    public function deletarDocumento($id){
        $documento = Documento::find($id);
        if(!$documento){
            return redirect()->back();
        }
        $documento->delete();
        return redirect()->route('documentos.listar')->with('message', "Documento {$documento->title} deletada com sucesso!");
    }

    public function login(){
        $usuario = ["id" => rand(3000, 20000), "name" =>"Gabriel"];
        session(["usuario" => $usuario]);
    }

    public function logout(){
        session()->forget('usuario');
    }
        
}
