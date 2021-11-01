<?php

$variavel1 = rand(1, 99);
$variavel2 = rand(1, 99);
$variavel3 = rand(1, 99);

$verificacao = 1;
while($verificacao <4){
    echo "Variavel ".$verificacao." -> ";
    par(${'variavel'.$verificacao});
    echo "<br><br>";
    $verificacao +=1;
}

function par($variavel){
    if($variavel%2 == 0){
        echo $variavel;
    }else{
        echo "incrementada: ".$variavel+=1;
    }
}

?>
