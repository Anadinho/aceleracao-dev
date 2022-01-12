<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Documento extends Model 
{
    use HasFactory;

    protected $fillable = 
    [
        'title',
        'tamanho',
        'numeroAssinatura',
        'assinaturaResponsavel',
        'quantiadePaginas'
        
    ]; 

  
    // public function cadastrarDocumento($dados){
        
    //     return $documento = Documento::create([
    //         'title' => $dados->title,
    //         'tamanho' => $dados->tamanho,
    //         'numeroAssinatura' => $dados->numeroAssinatura,
    //         'assinaturaResponsavel' => $dados->assinaturaResponsavel,
    //         'quantiadePaginas' => $dados->quantiadePaginas
    //     ]);
      
    // }

}
