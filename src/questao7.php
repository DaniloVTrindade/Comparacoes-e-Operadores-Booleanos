<?php
$matricula1 = (string) readline("Digite a primeira matrícula: ");
$matricula2 = (string) readline("Digite a segunda matrícula: ");

$comparacaoTexto = strcmp($matricula1, $matricula2);

if ($comparacaoTexto < 0) {
    echo "Comparando como texto (strcmp): $matricula1 vem primeiro\n";
} elseif ($comparacaoTexto > 0) {
    echo "Comparando como texto (strcmp): $matricula2 vem primeiro\n";
} else {
    echo "Comparando como texto (strcmp): as matrículas são iguais\n";
}

// strcmp() compara como texto. O operador < pode tratar strings numéricas como números.
if ($matricula1 < $matricula2) {
    echo "Comparando com o operador <: $matricula1 vem primeiro\n";
} elseif ($matricula2 < $matricula1) {
    echo "Comparando com o operador <: $matricula2 vem primeiro\n";
} else {
    echo "Comparando com o operador <: as matrículas são iguais\n";
}
?>
