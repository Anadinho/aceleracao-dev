<?php

class Nota{
    private int $id;
    private string $nome;
    private string $descricaoItem;
    private int $quantidadeItem;
    private float $precoVenda;
    private float $descontoItem;


public function __construct ( 
    int $id,
    string $nome,
    string $descricaoItem ,
    int $quantidadeItem = 0,
    float $precoVenda,
    float $descontoItem
    ){
        $this->id =$id;
        $this->nome = $nome;
        $this->descricaoItem = $descricaoItem;
        $this->precoVenda = $precoVenda;
        $this->descontoItem = $descontoItem; 
        $this->quantidadeItem = $quantidadeItem;
    }


    function calculaFatura(){
        $fatura = ($this->quantidadeItem * $this->precoVenda);
        return $fatura;
    }

    /**
     * Set the value of precoVenda
     *
     * @return  self
     */ 
    public function setPrecoVenda($precoVenda)
    {
        $this->precoVenda = $precoVenda;

        return $this;
    }

    /**
     * Set the value of quantidadeItem
     *
     * @return  self
     */ 
    public function setQuantidadeItem($quantidadeItem)
    {
        $this->quantidadeItem = $quantidadeItem;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of descricaoItem
     */ 
    public function getDescricaoItem()
    {
        return $this->descricaoItem;
    }

    /**
     * Get the value of quantidadeItem
     */ 
    public function getQuantidadeItem()
    {
        return $this->quantidadeItem;
    }

    /**
     * Get the value of precoVenda
     */ 
    public function getPrecoVenda()
    {
        return $this->precoVenda;
    }

    /**
     * Get the value of descontoItem
     */ 
    public function getDescontoItem()
    {
        return $this->descontoItem;
    }

}

$nota = new Nota(5, "Copo", "Para liquidos quentes e geladois", 14, 5.99, 8);
echo $nota->calculaFatura();


?>