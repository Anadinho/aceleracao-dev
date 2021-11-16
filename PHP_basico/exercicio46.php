<?php

$clientes= array(
                    "Joaquim"=>["idade"=>"28","sexo"=>"M"],
                    "Maria"=>["idade" =>"41", "sexo" =>"F"],
                    "Pedro" => ["idade" => "18", "sexo" => "M"],
                    "Joana Silva" => ["idade" => "58", "sexo" =>"F"],
                    "João Lopes" => ["idade" => "21", "sexo" => "M"],
                    "Fernanda" => ["idade" => "25", "sexo" => "F"]
                  
                );

$homens = array();
$mulheres = array();

foreach($clientes as $key => $dados){
    echo $key." -> idade: ".$dados["idade"]
             ." , sexo: ".$dados['sexo']."<br>";

    if($dados['sexo'] == "M"){     
        $homem [$key] = ["idade"=> $dados["idade"]
                         , "sexo" => $dados["sexo"]];
        array_push($homens, $homem);
    }else{
        $mulher [$key] = ["idade"=> $dados["idade"]
                         , "sexo" => $dados["sexo"]];
        array_push($mulheres, $mulher);
    }             
}

echo "<br><br>";
var_export($homens);
echo "<br><br>";
var_export($mulheres);
echo "<br><br>";

echo "<hr>MULHERES <br>";
foreach( $mulheres as $key => $mulher){ 
    foreach($mulher as $k => $m){
        echo $k."<br> sexo : ".$m['sexo']."<br>"
             ." idade: ".$m['idade']."<br><br>";        
    }
}

echo "<hr>HOMENS <br>";
foreach( $homens as $key => $homem){ 
    foreach($homem as $k => $h){
        echo $k."<br> sexo : ".$h['sexo']."<br>"
             ." idade: ".$h['idade']."<br><br>";        
    }
}


?>