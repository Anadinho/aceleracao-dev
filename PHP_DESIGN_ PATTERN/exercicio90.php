<?php

class Logs{
    private static $log;
    private function __construct(){}

    public static function getInstancia(){
        if(self::$log==null){
            self::$log = new self;
        }
        return self::$log;
    }

    public function escreverLog($diretorio){
        $data = date('d-m-Y_H:i');
        $nomeArquivo = 'log-'.$data.'.txt';

        if(!file_exists($diretorio)){
            mkdir($diretorio,0777,true);
        }

        $arquivo = fopen($diretorio.DIRECTORY_SEPARATOR.$nomeArquivo, 'w');
        fwrite($arquivo, 'Arquivo criado em '.$data);
        fclose($arquivo);
    }

    public function buscarLog($diretorio) {
        
        echo "<p>Arquivos da pasta selecionada:</p>";
        $diretorio = dir($diretorio);

        while($arquivo = $diretorio->read()){
            if(($arquivo != '..')&&($arquivo != '.')){
                print_r(self::exibirLog($arquivo)['filename']);
                echo '<br>';
            }
        }
    }
    
    public static function exibirLog($arquivo){
        return pathinfo($arquivo);
    }
}


$testlog = Logs::getInstancia();
$testloglog->escreverLog('1');
$testloglog->buscarLog('1');
echo '<br><br>';

$testloglog1 = Logs::getInstancia();
$testloglog1->escreverLog('2');
$testloglog1->buscarLog('2');
echo '<br><br>';

$testloglog2 = Logs::getInstancia();
$testloglog2->escreverLog('3');
$testloglog2->buscarLog('3');
echo '<br><br>';

$testloglog3 = Logs::getInstancia();
$testloglog3->escreverLog('4');
$testloglog3->buscarLog('4');
echo '<br><br>';

$testloglog4 = Logs::getInstancia();
$testloglog4->escreverLog('5');
$testloglog4->buscarLog('5');
echo '<br><br>';



?>