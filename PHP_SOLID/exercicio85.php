<?php

interface Arma{
    public function usarArma();
}

//armas
class ArcoeFlexa implements Arma{
    public function usarArma(){
        echo 'flexada';
    }
}

class Espada implements Arma{
    public function usarArma(){
        echo 'espadada';
    }
}

class Faca implements Arma{
    public function usarArma(){
        echo "facada";
    }   
}

class Machado implements Arma{
    public function usarArma(){
        echo "machadada";
    }
}



//Avartar
abstract class Avatar{
    protected Arma $arma;

    public function __construct(Arma $arma)
    {
        $this->arma = $arma;            
    }

    public abstract function lutar();
}

class Rei extends Avatar{ 
    public function lutar()
    {
        $this->arma->usarArma();
    }
}

class Rainha extends Avatar{ 
    public function lutar()
    {
        $this->arma->usarArma();
    }
}

class Duende extends Avatar{ 
    public function lutar()
    {
        $this->arma->usarArma();
    }
}

class Guerreiro extends Avatar{ 
    public function lutar()
    {
        $this->arma->usarArma();    
    }
}


$machado = New Machado();
$rei = New Rei($machado);
echo "Ataque do rei -> ";
echo $rei->lutar();

?>