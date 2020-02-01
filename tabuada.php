<?php 


$multiplicador = 9; //Selecionar qual será o número a ser exibido a tabuada

for($i = 1; $i <= 10; $i++)
{
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado" . PHP_EOL;
}