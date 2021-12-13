<?php

interface IGeradorDeCupom{
    public function geradorDeCupom():float;
}

abstract class Carro implements IGeradorDeCupom{
    protected $id4x4;
    protected $ret;
    protected $esportivo;

    public function __construct($is4x4, $ret, $esportivo){
        $this->is4x4 = $is4x4;
        $this->ret = $ret;
        $this->esportivo = $esportivo;
    }
}

function exibirDesconto(IGeradorDeCupom $car)
    {
        return $cupom = "Cupom {$car->geradorDeCupom()}% off para passar no pedágio";
    }

class Uno extends Carro{
    private $discount = 0;

    public function __construct($is4x4, $esportivo){
        $this->is4x4 = $is4x4;
        $this->esportivo = $esportivo;
    }

    public function geradorDeCupom(): float
    {
        if($this->is4x4)
            $this->discount += 10;

        if($this->esportivo) 
            $this->discount += 15;

        return $this->discount;
    }
}

class Bmw extends Carro{
    private $discount = 0;

    public function geradorDeCupom(): float
    {
        if(!$this->is4x4) 
            $this->discount += 5;

        if($this->ret) 
            $this->discount += 7;

        if($this->esportivo) 
            $this->discount += 9;

        return $this->discount;
    }
}

class Mercedes extends Carro{
    private $discount = 0;

    public function geradorDeCupom():float{
        if(!$this->is4x4) 
            $this->discount += 10;

        if($this->ret) 
            $this->discount += 18;

        if($this->esportivo) 
            $this->discount += 19;

        return $this->discount;
    }
}

$uno = new Uno(true, true);
echo exibirDesconto($uno);

echo "<br><br>";

$bmw = new Bmw(true, true, true);
echo exibirDesconto($bmw);

echo "<br><br>";

$mercedes = new Mercedes(true, true, true);
echo exibirDesconto($mercedes);


?>