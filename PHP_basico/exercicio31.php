<?php
$dados[]= array();
$dados= file_get_contents('https://rickandmortyapi.com/api');
$dados = json_decode($dados);

if(!is_null($dados)){
    if(is_array($dados)){
        var_dump($dados);
    }else{
        echo "Tipo diferente de um array";
    }

}else{
    echo "não pode continuar";
}



?>