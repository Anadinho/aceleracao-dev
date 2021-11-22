<?php
require_once("exercicio63/Porta.php");
require_once("exercicio63/Imovel.php");
require_once("exercicio63/Edificio.php");
require_once("exercicio63/Casa.php");

$porta1=new Porta(false, "Azul", 40,20,180);
$porta2=new Porta(true, "roxa", 40,20,180);
echo $porta1->getDimensaoZ();

$casa = new Casa('Amarelo', array($porta1,$porta2));
$infoCasa = array(
    'cor' => $casa->getCor(),
    'Quantidade de Portas' => $casa->totalDePortas(),
    'Portas Abertas' => $casa->qtPortasAbertas()
);
listarInfo($casa);











function listarInfo($array)
{
    foreach($array as $k => $valor){
        echo "{$k} : {$valor}"."<br>";
    }
}


?>