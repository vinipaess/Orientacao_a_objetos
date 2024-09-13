<?php

abstract class Animal
{
    protected $nome;
    protected $raça;
    protected $quantidadeDePatas;
    protected $cor;
    protected $peso;
    protected $tamanho;
    protected $humano;

    public function __construct($nome, $raça, $quantidadeDePatas, $cor, $peso, $tamanho, $humano)
    {
        $this->nome = $nome;
        $this->raça = $raça;
        $this->quantidadeDePatas = $quantidadeDePatas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamanho = $tamanho;
        $this->humano = $humano;
    }
    abstract public function falar();

    public function getInfo()
    {
        return "{$this->nome} é um {$this->raça}, tem {$this->quantidadeDePatas} patas, cor{$this->cor}, pesa{$this->peso} e tem tamanho de {$this->tamanho}. humano: " . $this->humano;
    }
}
