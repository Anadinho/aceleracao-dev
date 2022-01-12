<?php

class Pessoa{
    private $token;
    private $nome;
    private $email;
    private $profissao;
    private $escolaridade;

    public function __construct( $nome,  $email,  $profissao,  $escolaridade){}

    public function getEmail(){
        return $this->email;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getProfissao(){
        return $this->profissao;
    }

    public function getEscolaridade(){
        return $this->escolaridade;
    }
    

    public function setToken($token){
        $this->token = $token;
    }

}



?>