<?php
$string = readline("Digite uma string para inverter: ");
$invertida = '';

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $invertida .= $string[$i];
}

echo "String invertida: " . $invertida . "\n";
