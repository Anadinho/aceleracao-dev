<?php
$array = ["Miguel","anadinho", "Arthur", "Heitor", "Helena", "Alice", "Theo", "Davi", "Laura", "Gabriel", "Gael" ];

foreach($array as $nomes){
    if(!is_dir($nomes)){
        mkdir($nomes);
        echo "Repositorio ".$nomes." Criado"."<br>";
        ${"arquivo".$nomes} = fopen("{$nomes}/{$nomes}.txt","w");
        fwrite(${"arquivo".$nomes}, $nomes);

    }else{
        echo "Diretorio ja existente!!<br>";
        
        //deleta o diretorio ja existente
        // if(is_dir_empty($nomes)){
        //     echo $nomes." diretorio vaziooooooooooooooooooooooo"."<br>";
        //     rmdir($nomes);
        // }else{
        //     echo "Repositorio {$nomes} Deletado !!<br>";
        //     unlink("./{$nomes}/{$nomes}.txt");
        //     rmdir($nomes);            
        // }

    }

}

function is_dir_empty($dir){
    if(!file_exists("{$dir}/{$dir}.txt")){
        return true;
    }else{
        return false;
    }
}



?>