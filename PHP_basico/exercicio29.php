<?php

$obj=[];
$obj = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes');
$obj = (array) $obj;
var_export($obj);

// if(is_array($obj)){
//     echo "sim";
// }else{
//     echo "não";
// }

?>
