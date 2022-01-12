<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InsertAssinaturaRequest;
use App\Http\Resources\AssinaturaResource;
use App\Http\Resources\AssinaturaResourceCollection;
use App\Models\Assinatura;
use App\Repository\AssinaturaRepository;
use Illuminate\Http\Request;

class AssinaturaController extends Controller
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
    public function index(Request $request)
    {
        $assinaturas =  $this->model;
        $assinaturasRepository = new AssinaturaRepository($assinaturas);

        if($request->has('campos'))
        {
            $assinaturas = $assinaturasRepository->filterFields($request);
        }
        
        if($request->has('conditions'))
        {
            $assinaturas = $assinaturasRepository->filtraComCondicao($request);
        }  
        
        return new AssinaturaResourceCollection($assinaturas->paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertAssinaturaRequest $form)
    {
        $assinatura = Assinatura::create($form->all());

        if(!$assinatura){
            return response()->json(['message' => 'erro ao cadastrar, tente novamente']);
        }                
        return new AssinaturaResource($assinatura);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assinatura = Assinatura::where('id',$id)->first();

        if(!$assinatura){
            return response()->json(['message' => 'Assinatura nao encontrada'], 404);
        }
                
        return new AssinaturaResource($assinatura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $form, $id)
    {
        $assinatura = Assinatura::find($id);

        if(!$assinatura){
            return response()->json(['message' => 'Erro ao alterar a assinatura']);
        }     
        
        $assinatura->update($form->all());
        return new AssinaturaResource($assinatura);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assinatura = Assinatura::find($id);
        if(!$assinatura){
            return response()->json(['code' => '500', 'message' => 'Erro ao excluir assinatura, não encontrado']);
        }
        $assinatura->delete();
        return response()->json(['message' => 'Assinatura Excluida com sucesso']);
    }
}
