<?php

abstract class Pao{
    protected $nome;

    public function getNome(){
        return $this->nome;
    }
    
}


class Frances extends Pao{
    public function __construct()
    {
        $this->nome = "Pão Frances";
    }

}


class Carteiro extends Pao{
    public function __construct()
    {
        $this->nome = "Pão Carteiro";
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
}


class Calabresa extends RecheioDecorator{   
    private $pao;

    public function __construct(Pao $pao){
        $this->pao = $pao;
    }

    public function getNome(){
        return $this->pao->getNome()."+ Calabresa";
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
}


class Margarina extends RecheioDecorator{   
    private $pao;

    public function __construct(Pao $pao){
        $this->pao = $pao;
    }

    public function getNome(){
        return $this->pao->getNome()."+ Margarina";
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
}

class Mussarela extends RecheioDecorator{   
    private $pao;

    public function __construct(Pao $pao){
        $this->pao = $pao;
    }

    public function getNome(){
        return $this->pao->getNome()."+ Mussarela";
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
}

//sal
$frances = new Frances();
$frances = new Salame($frances);
$frances = new Mussarela($frances);
echo $frances->getNome();
echo "<br><br>";

$frances1 = new Frances();
$frances1 = new Salame($frances1);
echo $frances1->getNome();
echo "<br><br>";

$frances2 = new Frances();
$frances2 = new Mussarela($frances2);
echo $frances2->getNome();
echo "<br><br>";

$frances3 = new Frances();
$frances3 = new Ovo($frances3);
$frances3 = new Mussarela($frances3);
echo $frances3->getNome();
echo "<br><br>";

$frances4 = new Frances();
$frances4 = new Ovo($frances4);
$frances4 = new Margarina($frances4);
echo $frances4->getNome();
echo "<br><br>";

$frances5 = new Frances();
$frances5 = new Margarina($frances5);
echo $frances5->getNome();
echo "<br><br>";

$frances6 = new Frances();
$frances6 = new Ovo($frances6);
echo $frances6->getNome();
echo "<br><br>";


//Doce
$carteiro = new Carteiro();
$carteiro = new Geleia($carteiro);
echo $carteiro->getNome();
echo "<br><br>";

$carteiro1 = new Carteiro();
$carteiro1 = new Geleia($carteiro1);
$carteiro1 = new Salame($carteiro1);
echo $carteiro1->getNome();
echo "<br><br>";

$carteiro2 = new Carteiro();
$carteiro2 = new PastaAmedoim($carteiro2);
$carteiro2 = new Geleia($carteiro2);
echo $carteiro2->getNome();
echo "<br><br>";

$carteiro3 = new Carteiro();
$carteiro3 = new Salame($carteiro3);
echo $carteiro3->getNome();
echo "<br><br>";

$carteiro4 = new Carteiro();
$carteiro4 = new PastaAmedoim($carteiro4);
echo $carteiro4->getNome();
echo "<br><br>";



?>