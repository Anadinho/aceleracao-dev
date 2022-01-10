<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
    
        $documentos = Documento::paginate(10);    
        return response()->json($documentos);
    }

    public function listarDocumento($id){
        $documento = Documento::find($id);

        if(!$documento){
            return response()->json(['message' => 'Documento nao encontrado'], 404);
        }
                
        return response()->json($documento);
    }

    
        
}
