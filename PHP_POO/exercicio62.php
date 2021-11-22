<?php

class Plano{

    private array $posicaoInicial;

    function __construct($posicaoInicial=array(0,0))
    {
        $this->posicaoInicial = $posicaoInicial;
    }


    public function getPosicaoInicial()
    {
        return $this->posicaoInicial;
    }

    public function getPosicaoRelativa(Plano $ponto):array
    {
        
        $relativoX = $this->posicaoInicial[0] - $ponto->getPosicaoInicial()[0];
        $relativoY = $this->posicaoInicial[1] - $ponto->getPosicaoInicial()[1];
        
        $posicaoRelativa = array($relativoX,$relativoY);
        return $posicaoRelativa;
    }

    public function getDistancia(Plano $ponto):float{
        $dist = $this->getPosicaoRelativa($ponto);
       
        $deltaX = (pow($dist[0],2));
        $deltaY = (pow($dist[1],2));
        $resulDistancia = sqrt($deltaX + $deltaY);
        return $resulDistancia;
    }
}


$ponto = New Plano(array(1,3));
$ponto2 = new Plano(array(5,6));

$posicaoInicial = $ponto->getPosicaoInicial();
echo "posicao inicial = ( ";
foreach($posicaoInicial as $p){
    echo $p." ";
}
echo " )";

echo "<br> Ponto Final( ";
foreach($ponto2->getPosicaoInicial()as $p){
    echo $p." ";
}
echo " )<br>";

$posicaoRelativa = $ponto->getPosicaoRelativa($ponto2);
echo "<br> Posicao relativa dos P1 e P2 ( ";
foreach($posicaoRelativa as $p){
    echo $p." ";
}
echo " )";

echo "<br>";
$distancia = $ponto->getDistancia($ponto2);
echo "Distancia entre os dois pontos = {$distancia}"; 


?>