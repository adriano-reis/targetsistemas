<?php

/*

4) Dado o valor de faturamento mensal de uma distribuidora, detalhado por estado:

SP – R$67.836,43
RJ – R$36.678,66
MG – R$29.229,88
ES – R$27.165,48
Outros – R$19.849,53

Escreva um programa na linguagem que desejar onde calcule o percentual de representação que cada estado teve dentro do valor total mensal da distribuidora.

*/

$fat_estado = array(
    array("SP", 67836.43),
    array("RJ", 36678.66),
    array("MG", 29229.88),
    array("ES", 27165.48),
    array("Outros", 19849.53)
);

//Array de Estados

$arrayestados = [];

foreach ($fat_estado as $fats) {

    array_push($arrayestados, $fats[0]);
}

// print_r($arrayestados);
// echo "\n";

//Array de Valores

$arrayvalores = [];

foreach ($fat_estado as $fat) {

    array_push($arrayvalores, $fat[1]);
}

// print_r($arrayvalores);
// echo "\n";

//Cálculo Total de Faturamento mensal

$faturamentomensal = array_sum($arrayvalores);

// echo $faturamentomensal;
// echo "\n";


//Cálculo da Porcentagem de Faturamtento

$porcentagem = [];

foreach ($arrayvalores as $val) {

    $valporcentagem = ($val / $faturamentomensal) * 100;

    array_push($porcentagem, number_format((float)$valporcentagem, 2, '.', ''));
}

// print_r($porcentagem);
// echo "\n";


//Impressão do resultado

$fat_estado = [];

echo "=================================================================";
echo "\n";
echo "| *************  Faturamento Mensal por Estado  *************** |";
echo "\n";
for ($i = 0; $i < count($porcentagem); $i++) {

    $fat_estado[$arrayestados[$i]] = $porcentagem[$i];

    if ($arrayestados[$i] != 'Outros') {
        echo "| " . $arrayestados[$i] . " possui " . $fat_estado[$arrayestados[$i]] . " % do valor total mensal da distribuidora";
        echo "      |";
        echo "\n";
    } else {
        echo "| " . $arrayestados[$i] . " possuem " . $fat_estado[$arrayestados[$i]] . " % do valor total mensal da distribuidora";
        echo " |";
        echo "\n";
    }
}
echo "=================================================================";
