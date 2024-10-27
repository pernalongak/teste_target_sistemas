<?php
function verificaFibonacci($numero) {
    $a = 0;
    $b = 1;

    if ($numero === 0) {
        return true;
    }

    while ($b <= $numero) {
        if ($b === $numero) {
            return true;
        }
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }

    return false;
}

$numero_informado = 8;

if (verificaFibonacci($numero_informado)) {
    echo "$numero_informado pertence à sequência de Fibonacci.\n";
} else {
    echo "$numero_informado não pertence à sequência de Fibonacci.\n";
}
