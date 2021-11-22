<?php

class Imovel{
    private String $cor = "Branca";
    private array $portas;

    public function __construct($cor,$portas)
    {
        $this->cor = $cor;
        $this->portas = $portas;
    }
    

    public function getPortas()
    {
        return $this->portas;
    }


    public function setPortas($portas)
    {
        $this->portas = $portas;

        return $this;
    }


    
    public function getCor()
    {
        return $this->cor;
    }

    
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }


    public function pinta(String $cor):void{
        $this->cor = $cor;
    }

    public function totalDePortas():int{
        return sizeOf($this->portas);
    }

    public function qtPortasAbertas():int{
        $qt=0;
        foreach($this->portas as $porta){
            if($porta->getAberta()){
                $qt++;
            }
        }
        return $qt;
    }


    
    


}


?>