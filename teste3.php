<?php


/*

3) Dado um vetor que guarda o valor de faturamento diário de uma distribuidora, faça um programa, na linguagem que desejar, que calcule e retorne:
• O menor valor de faturamento ocorrido em um dia do mês;
• O maior valor de faturamento ocorrido em um dia do mês;
• Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.

IMPORTANTE:
a) Usar o json ou xml disponível como fonte dos dados do faturamento mensal;
b) Podem existir dias sem faturamento, como nos finais de semana e feriados. Estes dias devem ser ignorados no cálculo da média;

*/

$arquivo = "dados.json";
$dados = file_get_contents($arquivo);
$array = json_decode($dados, true);

$arrayvalores = [];

foreach ($array as $arr) {

    array_push($arrayvalores, $arr['valor']);
}

echo "O menor valor de faturamento ocorrido em um dia do mês (considerando os dias zerados): "; //Não foi especificado na questão se deveria considerar os dias zerados
print_r(min($arrayvalores));
echo "\n";

echo "O menor valor de faturamento ocorrido em um dia do mês (sem considerar os dias zerados): ";
print_r(min(array_filter($arrayvalores)));
echo "\n";

echo "O maior valor de faturamento ocorrido em um dia do mês: ";
print_r(max($arrayvalores));
echo "\n";

$num_dias = count(array_filter($arrayvalores)); //número de dias que não estão zerados

$valortotal  = array_sum($arrayvalores);

$media = $valortotal / $num_dias;

// echo "Media mensal: " . $media . "\n";

$dias = 0;

foreach ($arrayvalores as $arrval) {

    if ($arrval > $media) {

        $dias += 1;
    }
}

echo "Número de dias no mês em que o valor de faturamento diário foi superior à média mensal: ";
echo $dias;
