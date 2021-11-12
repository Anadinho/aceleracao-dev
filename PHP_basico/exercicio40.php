<?php

$dir = "dados";



$arquivo = fopen("dados.txt", "a+");

for ($i=1; $i <= 700 ; $i++) { 
    if($i%2 == 0){
        fwrite($arquivo, $i."\n"); 
    }
    
}
fclose($arquivo);
echo "criado o arquivo";

?> 