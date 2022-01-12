<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'quantidadeAssinatura',
        'assinaturaPadrao',
        'numeroVezesUsada',        
    ]; 
    protected $connection = "pgsql";   

  
    public function cadastrarAssinatura($dados){
        
        return $assinatura = Assinatura::create([
            'quantidadeAssinatura' => $dados->quantidadeAssinatura,
            'assinaturaPadrao' => $dados->assinaturaPadrao,
            'numeroVezesUsada' => $dados->numeroVezesUsada,
        ]);
      
    }
}
