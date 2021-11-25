<?php
interface Compactador{
    public function compactar();
}


class Zip implements Compactador{
    private int $size;

    public function compactar(){
        echo "Compactado em formato zip";
    }

}

class Rar implements Compactador{
    private int $size;

    public function compactar(){
        echo "Compactado em formato rar";
    }

}

class File{
    private int $size;
    public function compactar(Compactador $compactador){
        $compactador->compactar();
    }

}



class Image extends File{    
    private int $widht;
    private int $height;

}

class Audio extends File{    
    private String $codec;
    // private Date $duration;
    
}

$audio = New Audio;
$zip = New Zip;
$rar = New Rar;
$audio->compactar($zip);
echo "<br>";
$audio->compactar($rar);

?>