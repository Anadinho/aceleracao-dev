<?php

$array_1 = array();
$array_2 =array();

for ($i = 0; $i < 20 ; $i++) { 
    $array_1[$i] = rand(-100,100);
    $array_2[$i] = rand(-100,100);

    $resultado = soma($array_1[$i],$array_2[$i]);

    $arquivo = fopen("arrays.txt","a");
    fwrite($arquivo, "{$array_1[$i]},{$array_2[$i]},{$resultado}"."\r\n");

   if($resultado < 0){
        echo '0<br>';
    }else{
        if($array_2[$i] < 0){
            echo "  {$array_1[$i]}   {$array_2[$i]} = ".$resultado."<br>";
        }else{
            echo "  {$array_1[$i]}+{$array_2[$i]} = ".$resultado."<br>";
        }
        
   }
}

function soma($value1, $value2){
    $soma = $value1 + $value2;
    if($soma < 0){
        return 0;
    }else{
        return $soma;
    }      
}
    

?>