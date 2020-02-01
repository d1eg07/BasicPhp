<?php 

$peso = 60; //informa seu peso
$altura = 1.74; //informa sua altura
$imc = $peso / $altura ** 2; //calculo do IMC

echo "Seu IMC é de $imc. Você está com o IMC ";

if($imc < 18.5)
{
    echo "abaixo"; //mostra se o IMC está abaixo
}

elseif ($imc < 25)
{
    echo "dentro"; //mostra se o IMC está dentro
}

else
{
    echo "acima"; //mostra se o IMC está acima
}


echo " do recomendado";