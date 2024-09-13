<?php

class Venda
{
    public $produto = [];
    public $humano;
    public $total = 0;
    public $preço;

    public function __construct($humano)
    {
        $this->humano = $humano;
    }
    public function adicionarProduto($produto)
    {
        $this->produto[] = $produto;
        $this->total += $produto->getPreço();
    }
    public function mostrarDetalhes()
    {
        echo "Humano: {$this->humano}\n";
        echo "Produtos comprados:\n";
        foreach ($this->produto as $produto) {
            echo "- {$produto->getNome()}: R$ {$produto->getPreço()}\n";
        }
        echo "total: R$ {$this->total}\n";
    }
}
