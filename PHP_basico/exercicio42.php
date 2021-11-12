<?php

$leituraArquivo = fopen("paises.txt", "r");
$sizeLeituraArquivo = filesize("paises.txt");

$dados = fread($leituraArquivo, $sizeLeituraArquivo);
$dados_array = json_decode($dados, true);
fclose($leituraArquivo);


$cabecalho= array();
foreach($dados_array[0] as $key =>$value){
    array_push($cabecalho, $key);
    
}


$cabecalho_csv = implode("," , $cabecalho). "\r\n";
$escritaArquivo = fopen("lista.csv","w");
fwrite($escritaArquivo, $cabecalho_csv);

foreach($dados_array as $values){
    $dados = array();    

    foreach($values as $key => $value){

        if(is_array($value)){
            echo "sim.<br><br>";
           is_array($value) ? array_push($dados, "Array"):  array_push($dados, $value);
        }else{
            echo "Nâo.<br><br>";
            array_push($dados, $value);
        };
                      
    }
        $dados_csv = implode(",", $dados)."\r\n";
        fwrite($escritaArquivo, $dados_csv);
    
}
fclose($escritaArquivo);

?>