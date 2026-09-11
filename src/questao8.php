<?php
$entrada = readline("Digite um valor: ");

$comparacaoSolta = $entrada == 10;
$comparacaoEstrita = $entrada === 10;

echo "Tipo da entrada: " . gettype($entrada) . "\n";

if ($comparacaoSolta) {
    echo "\$entrada == 10  ->  true\n";
} else {
    echo "\$entrada == 10  ->  false\n";
}

if ($comparacaoEstrita) {
    echo "\$entrada === 10 ->  true\n";
} else {
    echo "\$entrada === 10 ->  false\n";
}

// readline() devolve string. == pode converter o tipo, mas === compara valor e tipo.
?>
