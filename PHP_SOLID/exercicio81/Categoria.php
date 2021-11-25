<?php

class Categoria{
    private int $id;
    private string $nome;
    private string $descricao;

    public function __construct()
    {
        
    }

    public function verificaPrioridade():bool{
        echo 'Verificando prioridade';
        return true;
    }

    public function aumentaNivel():bool
        {
            echo 'Aumentando o nível';
            return true;
        }
}


?>