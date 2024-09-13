<?php

class Produto
{
    public $nome;
    public $preço;

    public function __construct($nome, $preço)
    {
        $this->nome = $nome;
        $this->preço = $preço;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getPreço()
    {
        return $this->preço;
    }
}
