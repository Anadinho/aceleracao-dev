<?php

$variavel1=[1,2,3];
$variavel2=[4,5,6];
$variavel3=[7,8,9];
$variavel4=[10,11,12];
$variavel5=[13,14,15];

for ($i=1; $i <6 ; $i++) { 
    echo "Variavel ".$i."<br><br>";
    foreach(${'variavel'.$i} as $c => ${'variavel'.$i}){        
        echo 'indice: '.$c.'<br>'."Valor: ";
        var_export(${'variavel'.$i});
        echo "<br><br>";
    }
    echo "<hr>";  
}



?>