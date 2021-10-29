<?php

$array  = [];
$quatidadeNumero = 16;

for ($i=0; $i < $quatidadeNumero; $i++) { 
    $array[$i]= rand(1,1000);
}

$media=0;
foreach($array as $c => $array){
    echo $array."<br>";
    $media += $array;
}
$media /= $quatidadeNumero; 

  
echo "<br>"."Array com o comando var_export: ";
var_export($array);
echo "<hr>";

echo "<br><br>"."media com comando print: ";
print($media);

?>