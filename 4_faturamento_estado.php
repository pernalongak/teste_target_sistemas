<?php

$valores_por_estado = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
];

$total_mensal = array_sum($valores_por_estado);

$percentuais = [];
foreach ($valores_por_estado as $estado => $valor) {
    $percentuais[$estado] = ($valor / $total_mensal) * 100;
}

echo "Percentuais de representação por estado:\n";
foreach ($percentuais as $estado => $percentual) {
    echo "$estado: " . number_format($percentual, 2) . "%\n";
}