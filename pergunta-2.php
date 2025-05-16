<?php
function verificaFibonacci($numero) {
    $a = 0;
    $b = 1;
    
    while ($b <= $numero) {
        if ($b == $numero) {
            return true;
        }
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
    return false;
}

$numero = (int) readline("Digite um número para verificar na sequência de Fibonacci: ");

if (verificaFibonacci($numero)) {
    echo "$numero pertence à sequência de Fibonacci.\n";
} else {
    echo "$numero não pertence à sequência de Fibonacci.\n";
}
