<?php

$dir = "../img";
if(!is_dir($dir)){
    mkdir($dir);
}else{
    $scan = scandir($dir);
    $info = NULL;
    $data = array();
    
    foreach($scan as $img){
        $filename = "/home/anadinho/Documents/Soluti/Curso PHP/Aula01-git&github/aceleracao-dev/img/".$img;       
        if(in_array ($img, array(".",".."))){
            //continue
        }else{
            $info = pathinfo($img);
            $info['tamanho'] = filesize($filename);
            array_push($data, $info);
        }
    }
}
// var_dump($data);
echo "<br><br>";
var_export(json_encode($data));



?>