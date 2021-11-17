<?php
$n1 = array(
    "gabriel" =>["nota" =>"10"],
    "joao" => ["nota" => "10"],
    "maria" => ["nota" => "7"],
    "henrique" => ["nota" =>"8"],
    "natalia" => ["nota" => "9"],
);
$n2 = array(
    "gabriel" =>["nota" =>"9,5"],
    "joao" => ["nota" => "9"],
    "maria" => ["nota" => "8"],
    "henrique" => ["nota" =>"0"],
    "natalia" => ["nota" => "10"],
);

foreach($n1 as $k =>$v){
    $nota1 = $n1[$k]['nota'];
    $nota2 = $n2[$k]['nota'];

    $notaFinal= resultado($nota1,$nota2);
    if($notaFinal){
        echo"{$k} - Aprovado<br>";
        $arquivo = fopen('aluno-aprovado.txt','a+');
        fwrite($arquivo, "{$k} - Aprovado"."\r\n");
    }else{
        echo"{$k} - Reprovado<br>";
    }
}
fclose($arquivo);

function  resultado($value1, $value2){
   
    if($value1 > 7 && $value2 > 7){   
        $resultado = ((int)$value1 + (int)$value2);
        return $resultado >=19?  true :  false;
        
    }else{
        return false;
    }
}
?>