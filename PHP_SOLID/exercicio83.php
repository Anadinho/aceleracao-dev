<?php

interface Funcionario{
    public function funcao();


}

class Designer implements Funcionario{
    public function funcao()
    {
        echo "Faz Design";
    }
}

class Programmer implements Funcionario{
    public function funcao()
    {
       echo  "Faz Codigo";
    }
}


class Tester implements Funcionario{
    public function funcao()
    {
        echo "Faz testes";
    }
}

class Company{
    function buscaFuncionario(Funcionario $funcionario){
        echo "O funcionario faz: ".$funcionario->funcao();
    }
}


?>