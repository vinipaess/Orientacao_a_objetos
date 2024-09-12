<?php

require_once 'Animal.php';

class Peixe extends Animal
{
    public function falar()
    {
        return "O {$this->nome} ronca: glub glub";
    }
}
