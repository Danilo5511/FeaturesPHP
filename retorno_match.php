<?php
$busca = 25;
$buscar= 'X';

$retornoMatch =match ($buscar) {
    '1' => 'Encontrou o texto 1 <br>',
    1 =>  'Encontrou o número 1  <br>',
    5, '8',12,'X' =>'Encontrou o valor 5 ou 12, ou os textos 8 ou X  <br>',
    default =>'Não encontrou  <br>'
};
echo 'Resultado Match : '.$retornoMatch;

echo "<br>";

//Match com condicionais e opreações lógicas

$retornoMatch=match (true) {
    $busca < 20 => 'Encontrou ',
    $busca >= 20 && $busca <= 30  => 'Encontrou um valor maior que 20 e menor que 30',
    default => ' Não encontrou '
};

echo 'Resultado Match : '.$retornoMatch;

?>