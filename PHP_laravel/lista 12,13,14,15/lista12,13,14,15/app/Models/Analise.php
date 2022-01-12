<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analise extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'documento_id',
        'assinatura_id',
        'status',
        'dataAnalise',
        'visualizadores'        
    ]; 

    public function documento(){
        return $this->hasOne(Documento::class, 'id','documento_id');
    }

    public function assinatura(){
        return $this->hasOne(Assinatura::class, 'id','assinatura_id');
    }
}
