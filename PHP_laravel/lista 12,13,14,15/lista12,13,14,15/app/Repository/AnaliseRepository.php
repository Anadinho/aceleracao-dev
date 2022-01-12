<?php

namespace App\Repository;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AnaliseRepository{
    private $model;

    public function __construct(Model $model){
        $this->model=  $model;
    }

    public function filterFields(Request $request){
        $fields = $request->get('campos');
        return $this->model = $this->model->selectRaw($fields);

    }

    public function filtraComCondicao(Request $request){
        $conditions = $request->get('conditions');
        $expressoes = explode(";" , $conditions);

        foreach($expressoes as $e):
            $condition = explode(':' , $e);
            $this->model->where($condition[0], $condition[1], $condition[2]);
        endforeach;

        return $this->model;
    }

}