<?php
//criação de diretorios

$dir = "img";

if(!is_dir($dir)){
    //cria diretorio
    mkdir($dir);
    echo "Criou o diretorio";
}else{
    //remover diretorio
    rmdir($dir);
    echo "removeu";

    //escaneia o diretorio
    $scan = scandir($dir);
    $info = NULL;
    $data = array();


    foreach ($scan as $img){
        if(in_array($img, array(".",".."))){
            //continue
        }else{
            $info = pathinfo($img);
            
            //retorna o tamanho do arquivo
            $info['tamanho'] = filesize($img);
            array_push($data, $info);
        }
    }

    var_dump(json_encode($data));

    // //cria arquivo, exemplo log( a+ -> matem o conteudo, w+ apaga o conteudo)
    // $arquivo = fopen("log.txt", "a+");
    // fwrite($arquivo, date("d/M/Y")."\n");
    // fclose($arquivo);

} 


?>