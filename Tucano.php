<?php

require_once 'Animal.php';

class Tucano extends Animal
{
    public function falar()
    {
        return "o {$this->nome} gorjeia : tri tri tri";
    }
}
