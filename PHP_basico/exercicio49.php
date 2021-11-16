<?php
$pasta = "exercicio49";
if(is_dir($pasta)){
    echo "Diretorio{$pasta} ja criado!!! ";
    
}else{
    mkdir($pasta);    
    for ($i=1; $i <151 ; $i++) { 
        $caminhoDiretorio = "./exercicio49/{$i}";
        if(!is_dir($caminhoDiretorio)){
            mkdir($caminhoDiretorio);
            echo " {$i} criado com sucesso<br><br>";
        }
    
        $horario= date('d-m-Y_H:i');
    
        if($i%2 !=0){
            $nomeArquivo = "{$caminhoDiretorio}/log-{$horario}.txt";
    
            $arquivo = fopen($nomeArquivo, 'w');
            $info = pathinfo($nomeArquivo);
            $info['tamanho'] = filesize($nomeArquivo);
            fclose($arquivo);
            var_dump($info);
            echo "<br><br>";
        }
        
        
    }

}



?>