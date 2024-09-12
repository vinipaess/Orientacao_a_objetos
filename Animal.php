<?php

abstract class Animal
{
    protected $nome;
    protected $raça;
    protected $quantidadeDePatas;
    protected $cor;
    protected $peso;
    protected $tamanho;
    protected $dono;

    public function __construct($nome, $raça, $quantidadeDePatas, $cor, $peso, $tamanho, $dono)
    {
        $this->nome = $nome;
        $this->raça = $raça;
        $this->quantidadeDePatas = $quantidadeDePatas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamanho = $tamanho;
        $this->dono = $dono;
    }
    abstract public function falar();

    public function getInfo()
    {
        return "{$this->nome} é um {$this->raça}, tem {$this->quantidadeDePatas} patas, cor{$this->cor}, pesa{$this->peso} e tem tamanho de {$this->tamanho}. Dono: " . $this->dono->getInfo();
    }
}
