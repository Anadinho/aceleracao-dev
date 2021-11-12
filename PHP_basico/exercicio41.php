<?php

$dados=file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/paises");
// $dados = json_decode($dados);

$arquivo= fopen("paises.txt", "w");

fwrite($arquivo, $dados);

if(is_array($dados)){
    echo "sim.<br><br>";
}else{
    echo "Nâo.<br><br>";
};
fclose($arquivo);
echo "arquivo criado";
var_dump($dados);




?>