<?php

class Humano
{
    protected $nome;
    protected $idade;
    protected $endereço;
    protected $contato;

    public function __construct($nome, $idade, $endereço, $contato)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereço = $endereço;
        $this->contato = $contato;
    }
    public function getInfo()
    {
        return "Nome: {$this->nome}, Idade: {$this->idade}, Endereço: {$this->endereço}, Contato: {$this->contato}";
    }
}
