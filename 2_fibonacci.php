<?php
function fibonacci($n) {
    $fib = [0, 1];

    for ($indice = 2; $indice <= $n; $indice++) {
        $proximo = $fib[$indice - 1] + $fib[$indice - 2];
        $fib[] = $proximo;
    }

    return $fib;
}

print_r(fibonacci(10));

