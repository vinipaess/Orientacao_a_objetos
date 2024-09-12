<?php

require_once 'Lemure.php';
require_once 'Peixe.php';
require_once 'Tucano.php';

$lemure = new lemure('zoobomafoo', 'lémur-de-cauda-anelada', '2 mãos e 2 pés', 'branco', '2kg', '46cm');
$peixe =  new peixe('robalo', 'carpa', '0', 'dourado', '15kg', '55cm');
$tucano = new tucano('moacir', 'Tucano-de-peito-amarelo ', '2', 'verde-amarelada', '400g', '42cm');

echo $lemure->falar();
echo "\n";
echo $peixe->falar();
echo "\n";
echo $tucano->falar();
echo "\n";
