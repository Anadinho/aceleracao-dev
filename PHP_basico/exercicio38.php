<?php

$fahrenheitInicial = 70.1;
$fahrenheitFinal = 0.1;

$celsiusInicial = conversaoCelsius($fahrenheitInicial);
$celsiusFinal = conversaoCelsius($fahrenheitFinal);

echo $celsiusInicial."<br>".$celsiusFinal;


function conversaoCelsius($fahrenheit){
    return ($fahrenheit - 32)/1.8;
}


?>