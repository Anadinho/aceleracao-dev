<?php

$array= [0, 1, 2, 3, 4, 5, 6, 7, 8, 9,];


foreach($array as $c => $array){
    $resto = $array % 2;

    if($resto == 0 ){
        echo 'valor: '.$array.'<br>';
        echo 'indice: '.$c.'<br><br>';      
    }
}
echo "<hr>";



?>