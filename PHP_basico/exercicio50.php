<?php
$arrayCaminhoArquivo = array();

for ($i=1; $i <151 ; $i++) { 
    $dir = "./exercicio49/{$i}";

    if(is_dir($dir)){
        $arrayInfo = scandir($dir);          
        $verificaDiretorio = (count(glob("$dir/*")) === 0) ? 'Empty' : 'Not empty';
        
        if($verificaDiretorio == 'Empty'){
            echo "Diretorio {$dir} vazio!!<br><br>";
            rmdir($dir);

        }elseif($verificaDiretorio == 'Not empty'){
            foreach($arrayInfo as $info){
                if(!in_array($info,array(".",".."))){
                    $caminhoArquivo ="{$dir}/{$info}";
                    array_push($arrayCaminhoArquivo, $caminhoArquivo);
                }
            }
        }

    }
}

foreach($arrayCaminhoArquivo as $caminho){
    $infoCaminho = pathinfo($caminho);
    $infoCaminho['Tamanho'] = filesize(($caminho));

    var_export($infoCaminho);
    echo "<br><br>";
}



?>