<?php

require_once 'Animal.php';

class Lemure extends Animal
{
    public function falar()
    {
        return "O {$this->nome} assobia: uuuuu a a a a a auuau!";
    }
}
