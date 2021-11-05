<?php

$precos=array();
for ($i=0; $i < 12 ; $i++) {
    $precos[$i]= mt_rand(1000,10000)/100;
}

$precoTotal=0;
foreach($precos as $valor){
    echo "<hr>"."Valor etiqueta: R$ ".$valor."<br><br>";
    echo "A vista em dinheiro ou cheque  R$ ".avistaDinheiroCheque($valor)."<br>";
    echo " Avista no cartão de credito R$ ".avistaCartaoCredito($valor)."<br>";
    echo " Em 2x de ".parcelado2x($valor)."<br>";
    echo " Em 3x de ".parcelado3x($valor);
    
}

function avistaDinheiroCheque($valor){
    return $valor -=$valor*0.10;
}

function avistaCartaoCredito($valor){
    return $valor -=$valor*0.05;
}

function parcelado2x($valor){
    return ($valor/2);  
}

function parcelado3x($valor){
    $valor+=($valor*0.10);
    return ($valor/3);
}

?>