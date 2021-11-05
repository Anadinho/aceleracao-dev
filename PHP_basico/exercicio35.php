<?php

$salarioMinimo = 1000;

$cpf = 99999999999;
$nome = "Gabriel";
$nDependente = 5;
$renda = 3001;

$pessoa = ["nome" =>$nome
           , "cpf" =>$cpf
           , "Numero_Dependente" =>$nDependente
           , "renda" => $renda];


           
$pessoa = (calculoImpostoRenda($pessoa, $salarioMinimo));
foreach($pessoa as $i => $valores){
    // echo $i." : ";
    echo($i)." : ".($pessoa[$i]);
    echo "<br>";
}

function calculoImpostoRenda($pessoa, $salarioMinimo){

    if($pessoa["renda"] <= ($salarioMinimo*2)){
        $pessoa["imposto"] = ($salarioMinimo * (0.0*$pessoa["Numero_Dependente"]));
            return $pessoa;
       
    }elseif($pessoa["renda"] > ($salarioMinimo*2) && $pessoa["renda"] <= ($salarioMinimo*3)){
        $pessoa["imposto"] = ($salarioMinimo*(0.05*$pessoa["Numero_Dependente"]));
            return $pessoa;

    }elseif($pessoa["renda"] > ($salarioMinimo*3) && $pessoa["renda"] <= ($salarioMinimo*5)){
        $pessoa["imposto"] = ($salarioMinimo * (0.1*$pessoa["Numero_Dependente"]));
            return $pessoa;
    }
}

?>                  