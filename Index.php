<?php

require_once 'Animal.php';
require_once 'Funcionarios.php';
require_once 'Humano.php';
require_once 'Lemure.php';
require_once 'Peixe.php';
require_once 'Tucano.php';
require_once 'Produto.php';
require_once 'Venda.php';

$Produto1 = new Produto("ração para peixe", 65);
$Produto2 = new Produto("gaiola para aves", 200);
$Produto3 = new Produto("shampoo para lemure", 30);

$humano = readline("insira seu nome:\n");

$Venda = new Venda($humano);
$Venda->adicionarProduto($Produto1);
$Venda->adicionarProduto($Produto2);
$Venda->adicionarProduto($Produto3);

$Venda->mostrarDetalhes();

function lerDadosFuncionario()
{
    $nome = readline("Digite o nome do funcionário: ");
    $idade = readline("Digite a idade do funcionário: ");
    $endereco = readline("Digite o endereço do funcionário: ");
    $contato = readline("Digite o contato do funcionário: ");
    $cargo = readline("Digite o cargo do funcionário (balconista, veterinário(a), vendedor(a)): ");
    $salario = readline("Digite o salário do funcionário: ");
    return new Funcionarios($nome, $idade, $endereco, $contato, $cargo, $salario);
}
echo "Insira os dados do primeiro funcionário:\n";
$funcionario1 = lerDadosFuncionario();

echo "\nInsira os dados do segundo funcionário:\n";
$funcionario2 = lerDadosFuncionario();

echo "\nInsira os dados do terceiro funcionário:\n";
$funcionario3 = lerDadosFuncionario();

echo "\nInformações dos Funcionários:\n";
echo $funcionario1->getInfoFuncionario() . "\n";
echo $funcionario2->getInfoFuncionario() . "\n";
echo $funcionario3->getInfoFuncionario() . "\n";


function lerDadosHumanos()
{
    $nome = readline("Digite seu nome: ");
    $idade = readline("Digite a sua idade: ");
    $endereço = readline("Digite seu endereço: ");
    $contato = readline("Digite seu telefone: ");
    return new Humano($nome, $idade, $endereço, $contato);
}
echo "\ninsira os dados do dono do lemure:\n";
$humano1 = lerDadosHumanos();

echo "\nInsira os dados do dono do peixe:\n";
$humano2 = lerDadosHumanos();

echo "\nInsira os dados do dono do tucano:\n";
$humano3 = lerDadosHumanos();

$lemure = new lemure('zoobomafoo', 'lémur-de-cauda-anelada', '2 mãos e 2 pés', 'branco', '2kg', '46cm', '$humano1');
$peixe =  new peixe('robalo', 'carpa', '0', 'dourado', '15kg', '55cm', '$humano2');
$tucano = new tucano('moacir', 'Tucano-de-peito-amarelo ', '2', 'verde-amarelada', '400g', '42cm', '$humano3');

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
