<?php

class Cliente{
    public function isValid():bool{
        return true;
    }
}

interface ClienteRepository{
    public function adicionarCliente(Cliente $cliente);
}

class ClienteService implements ClienteRepository{
    public function adicionarCliente(Cliente $cliente){
        if(!$cliente->isValid()){
            echo "Dados Invalidos";
        }
        $repo = new ClienteRepository();

        if($repo ->adicionarCliente($cliente)){
            echo "Cliente cadastrado com sucesso";
        }else{
            echo "Error";
        }
    }
}

?>