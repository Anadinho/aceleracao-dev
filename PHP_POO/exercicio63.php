<?php
require_once("exercicio63/Porta.php");
require_once("exercicio63/Imovel.php");
require_once("exercicio63/Edificio.php");
require_once("exercicio63/Casa.php");

$porta1=new Porta(false, "Azul", 40,20,180);
$porta2=new Porta(true, "roxa", 40,20,180);

$casa = new Casa('Amarelo', array($porta1,$porta2));
echo "<br>";
$infoCasa = array(
    'cor' => $casa->getCor(),
    'Quantidade de Portas' => $casa->totalDePortas(),
    'Portas Abertas' => $casa->qtPortasAbertas()
);
// listarInfo($infoCasa);

$edificio = new Edificio('azul', 2, 10, array($porta1, $porta2) );

$edificio->adicionarPorta($porta2);
$edificio->adicionarAndar();

$infoEdificio = array(
    'cor' => $edificio->getCor(),
    'Quantidade de Portas' => $edificio->getTotalDePortas(),
    'Quantidade de Portas Abertas' => $edificio->qtPortasAbertas(),
    'Quantidade de Andares' => $edificio->getTotalDeAndares()
);
listarInfo($infoEdificio);
echo "<br><br>";


function listarInfo($array)
{
    foreach($array as $k => $valor){
        echo " {$k} : {$valor}"."<br>";
    }
}


?>