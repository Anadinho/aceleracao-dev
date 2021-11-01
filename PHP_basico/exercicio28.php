<?php

$obj = new stdClass;
$obj = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/distritos');
var_export($obj);


?>