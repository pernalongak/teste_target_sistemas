<?php

$dados = file_get_contents('dados_faturamento.json');
$faturamento_diario = json_decode($dados);

$menor_valor = $faturamento_diario[0]->valor;
$maior_valor = $faturamento_diario[0]->valor;
$soma_valores = 0;
$dias_acima_media = 0;

foreach ($faturamento_diario as $dia) {
    if($dia->valor != 0)
    {
        $valor = $dia->valor;
    }
    $soma_valores += $valor;

    if ($valor < $menor_valor) {
        $menor_valor = $valor;
    }
    if ($valor > $maior_valor) {
        $maior_valor = $valor;
    }
}

$media_mensal = $soma_valores / count($faturamento_diario);

foreach ($faturamento_diario as $dia) {
    if($dia->valor != 0)
    {
        if ($dia->valor > $media_mensal) {
            $dias_acima_media++;
        }
    }
}

echo "Menor valor de faturamento: $menor_valor\n";
echo "Maior valor de faturamento: $maior_valor\n";
echo "Dias acima da média mensal: $dias_acima_media\n";