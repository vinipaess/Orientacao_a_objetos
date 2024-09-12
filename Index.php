<?php

require_once 'Humano.php';
require_once 'Lemure.php';
require_once 'Peixe.php';
require_once 'Tucano.php';

function lerDadosHumanos(){
    $nome=readline("Digite seu nome: ");
    $idade=readline("Digite a sua idade: ");
    $endereço=readline("Digite seu endereço: ");
    $contato=readline("Digite seu telefone: ");
    return new Humano($nome, $idade, $endereço, $contato);
}
echo "\ninsira os dados do dono do lemure:\n";
$humano1= lerDadosHumanos();

echo "\nInsira os dados do dono do peixe:\n";
$humano2 = lerDadosHumanos();

echo "\nInsira os dados do dono do tucano:\n";
$humano3= lerDadosHumanos();

$lemure = new lemure('zoobomafoo', 'lémur-de-cauda-anelada', '2 mãos e 2 pés', 'branco', '2kg', '46cm','$humano1');
$peixe =  new peixe('robalo', 'carpa', '0', 'dourado', '15kg', '55cm','$humano2');
$tucano = new tucano('moacir', 'Tucano-de-peito-amarelo ', '2', 'verde-amarelada', '400g', '42cm','$humano3');




echo $lemure->getInfo();
echo "\n";
echo $lemure->falar();
echo "\n";
echo $peixe->getInfo();
echo "\n";
echo $peixe->falar();
echo "\n";
echo $tucano->getInfo();
echo "\n";
echo $tucano->falar();
echo "\n";
