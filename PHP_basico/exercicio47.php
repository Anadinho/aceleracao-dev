<?php

$dados = file_get_contents('https://random-data-api.com/api/business_credit_card/random_card');
$dados_array = json_decode($dados, true);
$dados_string = implode(',', $dados_array);


$arquivo = fopen("cartao.txt", "w");
fwrite($arquivo,$dados_string);
fclose($arquivo);

$arquivo_read = fopen('cartao.txt', 'r');
$dados_read = fread($arquivo_read, filesize('./cartao.txt'));
fclose($arquivo_read);

echo "<br><br>";
$dados_read_array = explode(":", $dados_read);

echo "<br><br>";
$dados_read_json =  json_encode($dados_read_array);
var_dump($dados_read_json);


?>