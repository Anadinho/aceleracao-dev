<?php

abstract class Pao{
    protected $nome;

    public function getNome(){
        return $this->nome;
    }

    abstract function getValor();
    
}


class Frances extends Pao{
    public function __construct()
    {
        $this->nome = "Pão Frances";
    }
    
    public function getValor(){
        return 2.0;
    }

}


class Carteiro extends Pao{
    public function __construct()
    {
        $this->nome = "Pão Carteiro";
    }

    public function getValor(){
        return 4.0;
    }

}


abstract class RecheioDecorator extends Pao{  
    
}


class Salame extends RecheioDecorator{   
    private $pao;

    public function __construct(Pao $pao){
        $this->pao = $pao;
    }

    public function getNome(){
        return $this->pao->getNome()."+ Salame";
    }

    public function getValor(){
        return 1.0 + $this->pao->getValor();
    }
}


class Calabresa extends RecheioDecorator{   
    private $pao;

    public function __construct(Pao $pao){
        $this->pao = $pao;
    }

    public function getNome(){
        return $this->pao->getNome()."+ Calabresa";
    }

    public function getValor(){
        return 1.5 + $this->pao->getValor();
    }
}


class Ovo extends RecheioDecorator{   
    private $pao;

    public function __construct(Pao $pao){
        $this->pao = $pao;
    }

    public function getNome(){
        return $this->pao->getNome()."+ Ovo";
    }

    public function getValor(){
        return 1.0 + $this->pao->getValor();
    }
}


class Margarina extends RecheioDecorator{   
    private $pao;

    public function __construct(Pao $pao){
        $this->pao = $pao;
    }

    public function getNome(){
        return $this->pao->getNome()."+ Margarina";
    }

    public function getValor(){
        return 0.5 + $this->pao->getValor();
    }
}

class Geleia extends RecheioDecorator{   
    private $pao;

    public function __construct(Pao $pao){
        $this->pao = $pao;
    }

    public function getNome(){
        return $this->pao->getNome()."+ Geleia";
    }

    public function getValor(){
        return 1.0 + $this->pao->getValor();
    }
}

class Mussarela extends RecheioDecorator{   
    private $pao;

    public function __construct(Pao $pao){
        $this->pao = $pao;
    }

    public function getNome(){
        return $this->pao->getNome()."+ Mussarela";
    }

    public function getValor(){
        return 1.5 + $this->pao->getValor();
    }
}

class PastaAmedoim extends RecheioDecorator{   
    private $pao;

    public function __construct(Pao $pao){
        $this->pao = $pao;
    }

    public function getNome(){
        return $this->pao->getNome()."+ Pasta de Amedoim";
    }

    public function getValor(){
        return 2.0 + $this->pao->getValor();
    }
}

//sal
$frances = new Frances();
$frances = new Salame($frances);
$frances = new Mussarela($frances);
echo $frances->getNome()." = R$ " ;
echo $frances->getValor();
echo "<br><br>";

$frances1 = new Frances();
$frances1 = new Salame($frances1);
echo $frances1->getNome()." = R$ " ;
echo $frances1->getValor();
echo "<br><br>";

$frances2 = new Frances();
$frances2 = new Mussarela($frances2);
echo $frances2->getNome()." = R$ " ;
echo $frances2->getValor();
echo "<br><br>";

$frances3 = new Frances();
$frances3 = new Ovo($frances3);
$frances3 = new Mussarela($frances3);
echo $frances3->getNome()." = R$ " ;
echo $frances3->getValor();
echo "<br><br>";

$frances4 = new Frances();
$frances4 = new Ovo($frances4);
$frances4 = new Margarina($frances4);
echo $frances4->getNome()." = R$ " ;
echo $frances4->getValor();
echo "<br><br>";

$frances5 = new Frances();
$frances5 = new Margarina($frances5);
echo $frances5->getNome()." = R$ " ;
echo $frances5->getValor();
echo "<br><br>";

$frances6 = new Frances();
$frances6 = new Ovo($frances6);
echo $frances6->getNome()." = R$ " ;
echo $frances6->getValor();
echo "<br><br>";


//Doce
$carteiro = new Carteiro();
$carteiro = new Geleia($carteiro);
echo $carteiro->getNome()." = R$ " ;
echo $carteiro->getValor();
echo "<br><br>";

$carteiro1 = new Carteiro();
$carteiro1 = new Geleia($carteiro1);
$carteiro1 = new Salame($carteiro1);
echo $carteiro1->getNome()." = R$ " ;
echo $carteiro1->getValor();
echo "<br><br>";

$carteiro2 = new Carteiro();
$carteiro2 = new PastaAmedoim($carteiro2);
$carteiro2 = new Geleia($carteiro2);
echo $carteiro2->getNome()." = R$ " ;
echo $carteiro2->getValor();
echo "<br><br>";

$carteiro3 = new Carteiro();
$carteiro3 = new Salame($carteiro3);
echo $carteiro3->getNome()." = R$ " ;
echo $carteiro3->getValor();
echo "<br><br>";

$carteiro4 = new Carteiro();
$carteiro4 = new PastaAmedoim($carteiro4);
echo $carteiro4->getNome()." = R$ " ;
echo $carteiro4->getValor();
echo "<br><br>";



?>