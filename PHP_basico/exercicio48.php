<?php

$uri_array = array('https://random-data-api.com/api/stripe/random_stripe',
'https://random-data-api.com/api/stripe/random_stripe',
'https://random-data-api.com/api/app/random_app',
'https://random-data-api.com/api/beer/random_beer',
'https://random-data-api.com/api/commerce/random_commerce',
'https://random-data-api.com/api/device/random_device',
'https://random-data-api.com/api/subscription/random_subscription');


$arquivo= fopen('api.txt', 'w');

foreach($uri_array as $value){
    $dados = file_get_contents($value);
    $dados_array = json_decode($dados, true);
    $dados_string = implode(',', $dados_array);
    fwrite($arquivo, $dados_string. "\r\n");

}

fclose($arquivo);

$arquivo = fopen('api.txt', 'r');
$dados_read = fread($arquivo, filesize('api.txt'));
$dados_result = explode("\r\n", $dados_read);

foreach($dados_result as $valor){
    $dados_array = explode(',', $valor);
    $dados_json = json_encode($dados_array);
    var_export($dados_json);
    echo "<br>";
}

?>