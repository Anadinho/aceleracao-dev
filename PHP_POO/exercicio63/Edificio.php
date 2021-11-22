<?php

class Edificio extends Imovel{

    private int $totalDePortas;
    private int $totalDeAndares;

    public function __construct($cor, $totalDePortas, $totalDeAndares, $portas)
    {
        parent::__construct($cor, $portas);
        $this->totalDeAndates = $totalDeAndares;
        $this->totalDePortas = $totalDePortas;

    }

    function adicionarPorta(Porta $porta){
        $this->totalDePortas++;
        array_push($this->portas, $porta);
    }

    function adicionarAndar(){
        $this->totalDeAndares++;
    }    

    public function getTotalDeAndares()
    {
        return $this->totalDeAndares;
    }
}


?>