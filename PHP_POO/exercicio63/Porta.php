<?php

class Porta {
    private bool $aberta = false;
    private string $cor = 'branca';
    private float $dimensaoX = 0;
    private float $dimensaoY = 0;
    private float $dimensaoZ = 0;

    public function __construct($aberta, $cor, $dimensaoX, $dimensaoY, $dimensaoZ)
    { 
        $this->aberta = $aberta;
        $this->cor = $cor;
        $this->dimensaoX = $dimensaoX;
        $this->dimensaoY = $dimensaoY;
        $this->dimensaoZ = $dimensaoZ;
    }

    function abre():void{
        $this->aberta = true;
    }

    function fecha():void{
        $this->aberta = false;
    }

    function pinta(String $cor):void{
        $this->cor = $cor;
    }


    public function getDimensaoX()
    {
        return $this->dimensaoX;
    }


    public function setDimensaoX($dimensaoX)
    {
        $this->dimensaoX = $dimensaoX;

        return $this;
    }

   
    public function getDimensaoY()
    {
        return $this->dimensaoY;
    }

   
    public function setDimensaoY($dimensaoY)
    {
        $this->dimensaoY = $dimensaoY;

        return $this;
    }

    
    public function getDimensaoZ()
    {
        return $this->dimensaoZ;
    }


    public function setDimensaoZ($dimensaoZ)
    {
        $this->dimensaoZ = $dimensaoZ;

        return $this;
    }
}

?>