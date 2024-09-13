<?php

require_once 'Humano.php';

class Funcionarios extends Humano
{
    protected $cargo;
    protected $salario;

    public function __construct($nome, $idade, $endereço, $contato, $cargo, $salario)
    {
        parent::__construct($nome, $idade, $endereço, $contato);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    public function getCargo()
    {
        return "Cargo: {$this->cargo}";
    }

    public function getSalario()
    {
        return "Salário: R$ {$this->salario}";
    }

    public function getInfoFuncionario()
    {
        return $this->getCargo() . " - " . $this->getInfo() . " - " . $this->getSalario();
    }
}
