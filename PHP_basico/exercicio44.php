<?php

$ceps = array(74680660,74265330,74420212,74484364,74369007,74781193
             ,74690879,74343560,74660210,74660210,74805010,74786004
             ,74684048,74055235,74884680);

buscarCep($ceps[0]);

$cep_array=array();
foreach($ceps as $cep){
    $dados=buscarCep($cep);
    $dados_array = json_decode($dados, true);
    array_push($cep_array, $dados_array);
}

var_export($cep_array[0]);

$arquivoCeps= fopen('ceps.txt', 'w');
fwrite($arquivoCeps, json_encode($cep_array));
fclose($arquivoCeps);

function buscarCep($cep){
    $uri = "https://viacep.com.br/ws/{$cep}/json/";

    $curl = curl_init($uri);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

    $resposta =  curl_exec($curl);
    return $resposta;
}
?> 