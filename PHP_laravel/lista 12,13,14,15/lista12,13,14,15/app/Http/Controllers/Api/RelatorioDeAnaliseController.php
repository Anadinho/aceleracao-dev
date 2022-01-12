<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnaliseResourceCollection;
use App\Repository\AnaliseRepository;
use App\Repository\AssinaturaRepository;
use App\Repository\DocumentoRepository;
use Illuminate\Http\Request;
use App\Models\{Assinatura, Analise, Documento};

class RelatorioDeAnaliseController extends Controller
{

    private $model;

    public function __construct(Assinatura $model)
    {
        $this->model = $model;
        $this->middleware('jwt.auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $analises = Analise::paginate(25);
        $assinaturas = Assinatura::paginate(25);
        $documentos = Documento::paginate(25);

        return response()->json([
            "analises"      => $analises,
            "documentos"    => $documentos,
            "assinaturas"   => $assinaturas
        ], 200);
    }
}
