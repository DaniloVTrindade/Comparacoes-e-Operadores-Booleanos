<?php
$entrada = readline("Digite a nota: ");

$notaInvalida = (!is_numeric($entrada)) || ($entrada < 0) || ($entrada > 10);

if ($notaInvalida) {
    echo "Nota inválida. Digite um número entre 0 e 10.\n";
} else {
    $nota = (float) $entrada;
    echo "Nota registrada: $nota\n";
}
?>
