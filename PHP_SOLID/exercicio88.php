<?php

class Cliente{
    public function isValid():bool{
        return false;
    }
}

interface ClienteRepository{
    public function adicionarCliente(Cliente $cliente);
}

class ClienteService{
    public function adicionarCliente(Cliente $cliente, ClienteRepository $clienteRepository)
    {
        if(!$cliente->isValid()){
            echo "Dados inválidos";
        }
        
        if($clienteRepository->adicionarCliente($cliente)){
            echo "Cliente cadastrado com sucesso";
        }else{
            echo "Error";
        }
    }
}

$cliente1=New Cliente;


?>