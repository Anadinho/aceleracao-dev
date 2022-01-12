<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InsereRelatorioRequest;
use App\Http\Resources\AnaliseResource;
use App\Http\Resources\AnaliseResourceCollection;
use App\Models\Analise;
use App\Repository\AnaliseRepository;
use Illuminate\Http\Request;

class AnaliseController extends Controller

{

    private $model;

    public function __construct(Analise $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $analises =  $this->model;
        $analiseRepository = new AnaliseRepository($analises);

        if($request->has('campos'))
        {
            $analises = $analiseRepository->filterFields($request);
        }
        
        if($request->has('conditions'))
        {
            $analises = $analiseRepository->filtraComCondicao($request);
        }  
        
        return new AnaliseResourceCollection($analises->paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsereRelatorioRequest $form)
    {
        $analise = Analise::create($form->all());

        if(!$analise){
            return response()->json(['message' => 'erro ao cadastrar, tente novamente']);
        }                
        return new AnaliseResource($analise);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $analise = Analise::where('id',$id)->first();

        if(!$analise){
            return response()->json(['message' => 'analise nao encontrada'], 404);
        }
                
        return new AnaliseResource($analise);
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
        $analise = Analise::find($id);

        if(!$analise){
            return response()->json(['message' => 'Erro ao alterar a analise']);
        }     
        
        $analise->update($form->all());
        return new AnaliseResource($analise);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $analise = Analise::find($id);
        if(!$analise){
            return response()->json(['code' => '500', 'message' => 'Erro ao excluir analise, não encontrado']);
        }
        $analise->delete();
        return response()->json(['message' => 'analise Excluida com sucesso']);
    }
}
