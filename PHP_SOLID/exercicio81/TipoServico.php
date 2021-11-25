<?php

class TipoServico{
    private int $id;
    private string $nome;
    private string $descricao;
    private int $nivel;

    public function __construct()
    {
        
    }

    public function verificaPrioridade():bool{
        echo 'Verificando prioridade';
        return true;
    }

    public function aumentaNivel():bool
        {
            $this->nivel++; 
            return true;
        }

}



?>