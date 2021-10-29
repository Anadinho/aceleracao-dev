<?php


$array1 = ["Pessoa" => "Gabriel", "Carro" => "New fiesta", "Estado" =>"GO"];
$array2 = ["Pessoa" => "Joao", "Carro" => "civic", "Estado" =>"GO"];
$pessoas = array_merge($array1, $array2);

foreach($pessoas as $c => $pessoas){
    echo 'valor: '.$pessoas.'<br>';
    echo 'indice: '.$c.'<br>';
    echo "<br>";
}


?>