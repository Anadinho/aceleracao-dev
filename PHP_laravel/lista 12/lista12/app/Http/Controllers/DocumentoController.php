<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\{Documento};
use Illuminate\Support\Facades\Date;
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
}
