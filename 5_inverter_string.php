<?php
function inverterString($string) {
    $tamanho = strlen($string);
    $invertida = '';

    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= $string[$i];
    }

    return $invertida;
}

$minhaString = "subi no onibus";
$stringInvertida = inverterString($minhaString);

echo "String original: $minhaString\n";
echo "String invertida: $stringInvertida\n";